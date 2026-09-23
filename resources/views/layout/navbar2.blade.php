<nav class="navbar navbar-expand-lg rounded mt-2" style="background-color: #074173" data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Logo dan Nama -->
        <div class="d-flex align-items-center">
            <a href="/">
                <img src="/pic/LOGO_SKC.png" alt="Logo SKC" width="50" height="50" class="me-2">
            </a>
        </div>

        <!-- Button untuk Toggle Navbar (Responsif) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Isi Navbar -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/error">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/informasi">Formulir PPDB</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Lain-Lain
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Event</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
            </ul>

            <!-- Search Form -->
            {{-- <form class="d-flex me-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
