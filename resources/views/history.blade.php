<!-- resources/views/history.blade.php -->

@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animated fadeInDown" style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-success text-white">History Sampah</div>

                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <h3 class="mb-4">Daftar Pengankutan Sampah</h3>
                        @forelse($listTrash as $trash)
                            <div class="card mb-3 animated fadeIn">
                                <div class="card-body">
                                    <p class="card-text"><strong>Nama:</strong> {{ $trash->nama }}</p>
                                    <p class="card-text"><strong>Nomor HP:</strong> {{ $trash->no_hp }}</p>
                                    <p class="card-text"><strong>Alamat:</strong> {{ $trash->alamat }}</p>
                                    <p class="card-text"><strong>Jenis Sampah:</strong> {{ $trash->jenis_sampah }}</p>
                                    <p class="card-text"><strong>Tanggal Penjemputan:</strong> {{ $trash->tanggal_penjemputan }}</p>
                                    <p class="card-text"><strong>Waktu Penjemputan:</strong> {{ $trash->waktu_penjemputan }}</p>
                                    <p class="card-text"><strong>Kendaraan:</strong> {{ $trash->kendaraan }}</p>
                                    <p class="card-text"><strong>Status:</strong> 
                                        @if($trash->status == 'diproses')
                                            <span class="badge badge-warning">{{ $trash->status }}</span>
                                        @elseif($trash->status == 'selesai')
                                            <span class="badge badge-success">{{ $trash->status }}</span>
                                        @else
                                            {{ $trash->status }}
                                        @endif
                                    </p>
                                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->

                                    <!-- Tombol "Hapus" -->
                                    <form action="{{ route('trash.destroy', ['id' => $trash->id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger animated fadeInRight mx-2">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p>Tidak ada data pengangkutan sampah.</p>
                        @endforelse

                        <!-- Tombol "Hapus Semua History" -->
                        <form action="{{ route('trash.destroyAll') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger animated fadeInRight">Hapus Semua History</button>
                        </form>

                        <a href="{{ route('home') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
