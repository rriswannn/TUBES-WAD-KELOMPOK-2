<!-- resources/views/partials/_navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">AngkutSampah.com</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('history') }}">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link" style="color: #000;">or</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</nav>

<style>
    .navbar {
        padding: 20px; /* Padding navbar */
        transition: padding 0.3s ease; /* Transisi perubahan padding navbar */
    }

    .navbar.scrolled {
        padding: 10px; /* Padding navbar saat discroll */
    }

    .divider {
        pointer-events: none; /* Menonaktifkan interaksi pada elemen */
        cursor: default; /* Ganti kursor menjadi default */
        color: #000; /* Ubah warna elemen menjadi warna teks default */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector('.navbar');

        // Fungsi untuk menambahkan atau menghapus kelas scrolled
        function handleScroll() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

        // Event listener untuk discroll
        window.addEventListener('scroll', handleScroll);

        // Menonaktifkan klik pada elemen dengan class "disabled"
        document.querySelectorAll('.disabled').forEach(function (element) {
            element.addEventListener('click', function (event) {
                event.preventDefault();
            });
        });
    });
</script>
