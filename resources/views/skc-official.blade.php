<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- Local Style --}}
    <link rel="stylesheet" href="{{ asset('css/navbarstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skcofficialstyle.css') }}">

    {{-- style css bootstrap --}}
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif --}}
    <title>SMK Kesehatan Cianjur</title>
</head>

<body class="container-fluid">
    <main>
        <header class="navigasi">
            @include('layout.navbar2')
        </header>

        {{-- isi dari website --}}
        <section class="main">

            <div>

                {{-- logo sekolah SMK Kesehatan Cianjur --}}
                <div class="logoskc">
                    <img src="pic/LOGO_SKC.png" alt="Logo Seklolah">
                </div>

                {{-- nama sekolah --}}
                <div class="jdl">
                    <p>SMK Kesehatan Cianjur</p>
                </div>

                {{-- logo jurusan --}}
                <div class="logo-jurusan">
                    <a href="https://smkkesehatancianjur.sch.id/informasi/askep">
                        <img src="pic/LOGO_ASKEP.png" alt="Logo Jurusan">
                    </a>
                    <a href="https://smkkesehatancianjur.sch.id/informasi/farmasi">
                        <img src="pic/LOGO_FARMASI.png" alt="Logo Jurusan">
                    </a>
                    <a href="https://smkkesehatancianjur.sch.id/informasi/tlm">
                        <img src="pic/LOGO_TLM.png" alt="Logo Jurusan">
                    </a>
                </div>

                {{-- pencarian --}}
                <div class="btn-daftar">
                    <a href="#">Daftar Sekarang</a>
                </div>
            </div>
        </section>

        <section class="video-profile">
            <div class="video-profile-overlay"></div>

            <div class="video-profile-container">

                <!-- Heading -->
                <div class="video-profile-heading">
                    <h3>[ SMK KESEHATAN CIANJUR - SEKOLAH KESEHATAN ]</h3>

                    <h2>Video Profile</h2>

                    <div class="video-profile-divider"></div>
                </div>

                <!-- Video -->
                <div class="video-profile-video">
                    <video controls playsinline preload="metadata" poster="/pic/bg2.jpg">
                        <source src="/vid/video-profile.mp4" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                </div>

                <!-- Description -->
                <div class="video-profile-content">
                    <p class="video-profile-welcome">
                        <strong>
                            Selamat datang di Sekolah Kesehatan di Cianjur!
                        </strong>
                    </p>

                    <p>
                        Kami dengan bangga memperkenalkan Sekolah Kesehatan,
                        sebuah lembaga pendidikan yang berkomitmen untuk memberikan
                        pendidikan berkualitas tinggi dan menciptakan lingkungan
                        belajar yang inspiratif bagi siswa di Cianjur.
                    </p>

                    <p>
                        Sebagai Sekolah Kesehatan, kami berkomitmen untuk
                        memberikan pendidikan yang inspiratif dan memberdayakan siswa
                        untuk menjadi pemimpin masa depan yang berpikiran kritis,
                        kreatif, dan berintegritas.
                    </p>
                </div>

            </div>

            <!-- Curve -->
            {{-- <div class="video-profile-curve">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1000 100"
                    preserveAspectRatio="none"
                >
                    <path
                        d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z">
                    </path>
                </svg>
            </div> --}}
        </section>

        @include('layout.footer2')

    </main>

    {{-- script js bootstrap --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
