<!-- resources/views/trash/info.blade.php -->

@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card animated fadeInDown" style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <div class="card-header bg-success text-white">
                    Informasi Pengangkutan Sampah
                </div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <h3 class="mb-4">Detail Sampah</h3>
                    <ul class="list-group animated fadeIn">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $trash->nama }}</li>
                        <li class="list-group-item"><strong>Nomor HP:</strong> {{ $trash->no_hp }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $trash->alamat }}</li>
                        <li class="list-group-item"><strong>Jenis Sampah:</strong> {{ $trash->jenis_sampah }}</li>
                        <li class="list-group-item"><strong>Tanggal Penjemputan:</strong> {{ $trash->tanggal_penjemputan }}</li>
                        <li class="list-group-item"><strong>Waktu Penjemputan:</strong> {{ $trash->waktu_penjemputan }}</li>
                        <li class="list-group-item"><strong>Kendaraan:</strong> {{ $trash->kendaraan }}</li>
                        <li class="list-group-item"><strong>Jarak Penjemputan:</strong> {{ $jarak }} km</li>
                        <li class="list-group-item"><strong>Estimasi Biaya Penjemputan:</strong> Rp {{ number_format($biaya_penjemputan) }}</li>
                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                    </ul>

                    <div class="mt-4">
                        <!-- Tambahkan tombol pilihan -->
                        <a href="{{ route('home') }}" class="btn btn-success">Kembali ke Beranda</a>
                        <a href="{{ route('trash.track', ['id' => $trash->id]) }}" class="btn btn-primary">Lanjut Tracking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
