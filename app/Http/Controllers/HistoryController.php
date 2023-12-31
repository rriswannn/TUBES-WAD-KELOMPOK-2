<?php

// app/Http/Controllers/HistoryController.php

namespace App\Http\Controllers;

use App\Models\Trash; // Pastikan model Trash di-import
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; // Import class Controller

// app/Http/Controllers/HistoryController.php

class HistoryController extends Controller
{
    public function index()
    {
        // Dapatkan semua sampah dari database yang terkait dengan nama pengguna yang login
        $listTrash = Trash::where('nama', Auth::user()->name)->get();

        // Tampilkan halaman history dengan daftar sampah
        return view('history', ['listTrash' => $listTrash]);
    }
}
