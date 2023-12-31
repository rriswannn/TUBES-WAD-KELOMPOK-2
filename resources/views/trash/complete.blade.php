@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card animated fadeInDown" style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #28a745; color: #fff;">Laman Selesai</div>

                <div class="card-body text-center">
                    <img src="{{ asset('images/selesai.png') }}" alt="Selesai" style="width: 5%; max-width: 100%; height: auto;">
                    <p class="mt-3" style="font-size: 18px;">Pesanan pengangkutan sampah telah selesai.</p>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-center mt-3">
                        <a href="{{ route('home') }}" class="btn btn-secondary animated fadeInLeft">Kembali ke Beranda</a>
                        <a href="{{ route('history') }}" class="btn btn-warning animated fadeInRight mx-2">Cek History</a>
                    </div>

                    <!-- Form for "Selesai" button -->
                    <div class="d-flex justify-content-center mt-3">
                        <form action="{{ route('trash.complete', ['id' => $trash->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success animated fadeInUp" style="color: #fff; border-color: #28a745; background-color: #28a745;">Selesai</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
