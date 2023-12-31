@extends('layouts.app')

@section('content')
<br>
<br>
<br>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow animated fadeInDown" style="border-radius: 15px;">
                <div class="card-header" style="background-color: #28a745; color: #fff;">
                    <h4 class="mb-0">Laman Tracking</h4>
                </div>

                <div class="card-body">
                    @if(session('pesan'))
                        <div class="alert alert-info" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    @isset($trash)
                        <p class="mb-3"><strong>Status:</strong> {{ $trash->status }}</p>

                        @if($trash->status == 'diproses')
                            <p class="mb-3">Informasi: Pesanan Anda sedang diproses. Kurir kami akan segera menghubungi Anda.</p>

                            <!-- Tombol "Selesaikan Pengangkutan Sampah" -->
                            <form action="{{ route('trash.complete', ['id' => $trash->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Selesai Pengangkutan</button>
                            </form>
                        @endif

                        <hr>

                        <!-- Tombol "Cek History" -->
                        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
                        <a href="{{ route('history') }}" class="btn btn-warning mx-2">Cek History</a>
                    @else
                        <p>Trash not found</p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
