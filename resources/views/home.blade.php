<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <!-- jumbotron-->
    <div class="container mt-5">
        <div class="jumbotron text-center animated fadeIn" style="background: linear-gradient(to bottom, #34bf49, #28a745); color: #fff; border-radius: 20px; padding: 30px;">
            <h1 class="display-4">Selamat Datang di AngkutSampah.com</h1>
            <p class="lead">Platform untuk pengelolaan sampah yang efisien dan ramah lingkungan.</p>
            <hr class="my-4">
            <p>Jadikan lingkungan lebih bersih dan sehat bersama kami!</p>
            <a class="btn btn-light btn-lg" href="{{ route('trash.create') }}" role="button" style="background-color: #28a745; color: #fff;">Tambah Sampah</a>
        </div>
    <br>
    <br>
    <!-- layanan kami-->
    <div class="row" style="background-color: #fff;">
    <div class="col-12">
        <div class="card" style="overflow: hidden; border: 0;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ asset('images/recycling.jpg') }}" class="card-img" style="width: 100%; height: auto; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="background-color: #fff;">
                        <br></br>
                        <br></br>
                        <h2 style="font-weight: bold; font-size: 2.25rem; color: #2B313B;" class="mb-4 leading-snug">
                            Layanan Kami
                        </h2>
                        <p style="font-weight: 300; font-size: 1rem; color: #576175; line-height: 1.5; margin-bottom: 1.5rem;">
                            Bergabunglah dengan layanan kami untuk pengelolaan sampah yang efisien.
                        </p>
                        <a href="{{ route('trash.create') }}" class="btn btn-success" style="border-radius: 10px;">Angkut Sampah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br></br>
<style>
    .card-animated {
        position: relative;
        transition: box-shadow 0.3s ease-in-out, border 0.3s ease-in-out;
        border-radius: 15px; /* Ubah nilai sesuai dengan keinginan Anda */
    }

    .card-animated:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border: 2px solid #fff;
    }

    .card-animated .card-body {
        position: relative;
        z-index: 2;
    }
</style>

<div class="row mb-4">
    <!-- Hubungi Kami -->
    <div class="col-md-5">
        <div class="card animated fadeInLeft border-0 card-animated">
            <div class="card-body text-center">
                <h2 class="card-title">Hubungi Kami</h2>
                <p class="card-text">Jangan ragu untuk menghubungi kami jika ada pertanyaan atau bantuan yang diperlukan.</p>
                <a href="https://wa.me/6281949864548" target="_blank" class="btn btn-success" style="border-radius: 10px;">Hubungi melalui WhatsApp</a>
                
            </div>
        </div>
    </div>

    <!-- Garis Lurus -->
    <div class="col-md-2 d-flex justify-content-center align-items-center">
        <div style="width: 1px; background-color: #ccc; height: 100%;"></div>
    </div>

    <!-- History -->
    <div class="col-md-5">
        <div class="card animated fadeInRight border-0 card-animated">
            <div class="card-body text-center">
                <h2 class="card-title">History Pengangkutan Sampah</h2>
                <p class="card-text">Pantau riwayat pengangkutan sampah Anda disini. </p>
                <a href="{{ route('history') }}" class="btn btn-success" style="border-radius: 10px;">History</a>    
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

    <!-- info terikini-->
    <div class="jumbotron text-center position-relative" style="background: url('{{ asset('images/sampah.jpg') }}') center center; background-size: cover; color: #fff; border-radius: 15px; height: 400px; display: flex; flex-direction: column; justify-content: flex-end; padding-bottom: 2rem; position: relative;">

<!-- Lapisan warna semi-transparan hanya pada gambar latar belakang -->
<div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); border-radius: 15px;"></div>

<h1 class="display-4 mb-4" style="z-index: 1; position: relative; font-weight: bold; font-size: 2.25rem; color: #fff;">Info Terkini</h1>
<p class="lead mb-4" style="z-index: 1; position: relative; font-weight: 300; font-size: 1rem; color: #fff; line-height: 1.5; margin-bottom: 1.5rem;">Dapatkan berita terkini seputar pengelolaan sampah di Indonesia dan dunia.</p>

<div style="z-index: 1; position: relative;">
    <a href="https://www.kemenkopmk.go.id/search/hasil?keys=sampah" target="_blank" class="btn btn-info btn-transition" style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.5); color: #fff; border: none;">
        Berita Sampah Indonesia
    </a>
</div>

</div>

<style>
.btn-transition {
    transition: background-color 0.3s, color 0.3s;
}

.btn-transition:hover {
    background-color: rgba(255, 255, 255, 0.8) !important;
    color: #000 !important;
}
</style>

    <br>
    <br>
    <br>
    <br>
    <br>


<!-- Our Teams -->
<div class="row mb-4">
    <div class="col-md-12 text-center">
        <h2 class="animated fadeInDown">Our Teams</h2>
    </div>
</div>

<div class="row mb-4">
    <!-- Team Member 1 -->
    <div class="col-md-4">
        <div class="card animated fadeInUp shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="{{ asset('images/team_member1.jpg') }}" class="card-img-top" alt="Team Member 1">
            <div class="card-body text-center">
                <h5 class="card-title">Muhammad Rizky Kurniawan</h5>
                <p class="card-text">S1 Sistem Informasi</p>
                <p class="card-text">Telkom University</p>
            </div>
        </div>
    </div>

    <!-- Team Member 2 -->
    <div class="col-md-4">
        <div class="card animated fadeInUp shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="{{ asset('images/team_member2.jpg') }}" class="card-img-top" alt="Team Member 2">
            <div class="card-body text-center">
                <h5 class="card-title">Raisya Salsabila </h5>
                <p class="card-text">S1 Sistem Informasi </p>
                <p class="card-text">Telkom University</p>
            </div>
        </div>
    </div>

    <!-- Team Member 3 -->
    <div class="col-md-4">
        <div class="card animated fadeInUp shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="{{ asset('images/team_member3.jpg') }}" class="card-img-top" alt="Team Member 3">
            <div class="card-body text-center">
                <h5 class="card-title">Naufal Arif Rajabi</h5>
                <p class="card-text">S1 Sistem Informasi </p>
                <p class="card-text">Telkom University</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4 justify-content-center">
    <!-- Team Member 4 -->
    <div class="col-md-4">
        <div class="card animated fadeInUp shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="{{ asset('images/team_member4.jpg') }}" class="card-img-top" alt="Team Member 4">
            <div class="card-body text-center">
                <h5 class="card-title">Nuraini Fauziyah</h5>
                <p class="card-text">S1 Sistem Informasi </p>
                <p class="card-text">Telkom University</p>
            </div>
        </div>
    </div>

    <!-- Team Member 5 -->
    <div class="col-md-4">
        <div class="card animated fadeInUp shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="{{ asset('images/team_member5.jpg') }}" class="card-img-top" alt="Team Member 5">
            <div class="card-body text-center">
                <h5 class="card-title">Muhammad Haikal Kamal</h5>
                <p class="card-text">S1 Sistem Informasi </p>
                <p class="card-text">Telkom University</p>
            </div>
        </div>
    </div>
</div>

    <br>
    <br>
    <br>

 
<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; 2023 AngkutSampah.com. All rights reserved.</p>
                <p>Telp : 6281949864548</p>
                <p>Email: Angkutsampah@gmail.com</p>
            </div>
        </div>
    </div>
</footer>

    <!-- Anime.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>
    <!-- Your Custom Animation Script -->
    <script>
        // Existing animation script

        // Animation for Our Teams Section
        anime({
            targets: '.card',
            translateY: [20, 0],
            opacity: [0, 1],
            easing: 'easeInOutQuad',
            duration: 1000,
            delay: anime.stagger(200, { start: 300 })
        });
    </script>
@endsection