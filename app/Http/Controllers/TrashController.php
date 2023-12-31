<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TrashController extends Controller
{
    public function __construct()
    {
        // Tambahkan middleware 'auth' pada metode yang memerlukan autentikasi
        $this->middleware('auth')->only(['create', 'store', 'track', 'showInfo']);
    }

    public function create()
    {
        // Tampilkan formulir untuk membuat sampah baru
        return view('trash.create');
    }

    public function store(Request $request)
    {
        // Set pesan sesi
        Session::flash('pesan', 'Pesanan pengangkutan sampah telah berhasil dibuat!');

        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'jenis_sampah' => 'required|string|max:255',
            'tanggal_penjemputan' => 'required|date',
            'waktu_penjemputan' => 'required|date_format:H:i',
            'kendaraan' => 'required|in:mobil,motor',
            'jarak' => 'required|numeric|min:0', // Tambahkan validasi jarak
        ]);

        // Tambahkan nama pengguna ke dalam data yang akan disimpan
        $validatedData['nama'] = Auth::user()->name;

        // Simpan data ke dalam database
        $trash = Trash::create($validatedData);

        // Atur status menjadi 'diproses'
        $trash->update(['status' => 'diproses']);

        // Ambil nilai jarak dari formulir
        $jarak = $validatedData['jarak'];

        // Hitung estimasi biaya penjemputan dan waktu tempuh
        $tarif_per_km = 5000; // Ganti sesuai dengan tarif yang diinginkan
        $biaya_penjemputan = $jarak * $tarif_per_km;

        // Estimasi waktu tempuh dalam menit
        $estimasi_waktu = $this->calculateEstimationTime($jarak);

        // Simpan estimasi biaya penjemputan, jarak, dan estimasi waktu ke dalam model
        $trash->jarak = $jarak;
        $trash->biaya_penjemputan = $biaya_penjemputan;
        $trash->estimasi_waktu = $estimasi_waktu;
        $trash->save();

        // Redirect ke halaman info pengangkutan sampah dengan membawa data estimasi biaya, jarak, dan waktu
        return redirect()->route('trash.info', [
            'id' => $trash->id,
            'jarak' => $jarak,
            'biaya_penjemputan' => $biaya_penjemputan,
            'estimasi_waktu' => $estimasi_waktu,
        ]);
    }

    public function track($id)
{
    $trash = Trash::find($id);

    if (!$trash) {
        return redirect()->route('home')->with('error', 'Sampah tidak ditemukan!');
    }

    // Periksa apakah status sebelumnya adalah 'Diproses' dan belum selesai
    if ($trash->status === 'Diproses' && $trash->status !== 'Selesai') {
        // Atur status menjadi 'Diproses' jika belum selesai
        $trash->update(['status' => 'Diproses']);
    }

    return view('trash.track', ['trash' => $trash]);
}

    


public function complete(Request $request, $id)
{
    try {
        $trash = Trash::findOrFail($id);

        // Periksa apakah pesanan sudah selesai
        if ($trash->status === 'Selesai') {
            return redirect()->route('trash.info', ['id' => $trash->id])->with('error', 'Pesanan sudah selesai!');
        }

        // Tandai pesanan sebagai selesai
        $trash->update(['status' => 'Selesai']);

        // ... (tindakan lainnya)

        return view('trash.complete', ['trash' => $trash]);
    } catch (\Exception $e) {
        return redirect()->route('history')->with('error', 'Terjadi kesalahan saat menyelesaikan pesanan');
    }
}



    public function showInfo($id)
    {
        // Dapatkan data sampah berdasarkan ID
        $trash = Trash::find($id);

        // Jika sampah tidak ditemukan, redirect dengan pesan error
        if (!$trash) {
            return redirect()->route('home')->with('error', 'Sampah tidak ditemukan!');
        }

        // Jika jarak tidak diatur, hitung kembali atau atur ke nilai default
        $jarak = $trash->jarak ?? rand(5, 20);

        // Jika biaya_penjemputan tidak diatur, hitung kembali atau atur ke nilai default
        $biaya_penjemputan = $trash->biaya_penjemputan ?? 0;

        // Kirim data ke halaman informasi pengangkutan
        return view('trash.info', ['trash' => $trash, 'jarak' => $jarak, 'biaya_penjemputan' => $biaya_penjemputan]);
    }

    public function destroy($id)
    {
        $trash = Trash::find($id);

        if (!$trash) {
            return redirect()->route('history')->with('error', 'Pengangkutan sampah tidak ditemukan!');
        }

        $trash->delete();

        return redirect()->route('history')->with('pesan', 'Pengangkutan sampah berhasil dihapus!');
    }
    
    public function destroyAll()
    {
        Trash::truncate(); // Menghapus semua data dari tabel

        return redirect()->route('history')->with('pesan', 'Semua pengangkutan sampah berhasil dihapus!');
    }

    // Tambahkan metode calculateEstimationTime
    private function calculateEstimationTime($jarak)
    {
        // Gantilah ini dengan logika perhitungan waktu estimasi berdasarkan jarak
        // Contoh sederhana: 1 menit per kilometer
        return ceil($jarak);
    }
}
