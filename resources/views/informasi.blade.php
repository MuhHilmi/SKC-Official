@extends('app')

@section('title', 'PPDB')

@section('content')

    <div class="logo">
        <img src="/pic/Logo_SPMB.png" alt="Logo SPMB" class="logo-png">
    </div>
    <div class="table-container">
        <div class="bagian-formulir">
            <h1 class="jdl">Formulir Pendaftaran</h1>
            <div class="formulir">
                <!-- Formulir pendaftaran -->
                <form class="form" name="formMurid" method="POST" action="{{ route('student.store') }}">
                    @csrf <!-- Token CSRF untuk keamanan -->

                    <!-- Input untuk nama lengkap -->
                    <div class="boxTextForm">
                        <label for="nama">Nama Lengkap :</label><br>
                        <input type="text" name="nama" id="nama" class="inputtext" required>
                    </div>

                    <!-- Pilihan jurusan menggunakan radio button -->
                    <div class="boxTextForm">
                        <label for="jurusan">Pilihan Jurusan ke-1 :</label>
                        <div class="form-group">
                            <select class="isi-option" name="jurusan" id="jurusan" required>
                                <option disabled hidden selected>--Pilih Jurusan--</option>
                                <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                                <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                                <option value="Teknik Laboratorium Medik">Teknik Laboratorium Medik</option>
                            </select>
                        </div>
                    </div>

                    <div class="boxTextForm">
                        <label for="jurusan">Pilihan Jurusan ke-2 :</label>
                        {{-- <p style="font-size: 15px"><i>pilihan ke-2 tidak boleh sama dengan pilihan ke-1</i></p> --}}
                        <div class="form-group">
                            <select class="isi-option" name="jurusan_2" id="jurusan_2" required>
                                <option disabled hidden selected>--Pilih Jurusan--</option>
                                <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                                <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                                <option value="Teknik Laboratorium Medik">Teknik Laboratorium Medik</option>
                            </select>
                        </div>
                    </div>

                    <!-- Input untuk tempat lahir -->
                    <div class="boxTextForm">
                        <label for="tmptLahir">Tempat Lahir :</label><br>
                        <input type="text" name="tempat_lahir" id="tmptLahir" class="inputtext">
                    </div>

                    <!-- Input untuk tanggal lahir -->
                    <div class="boxTextForm">
                        <label for="tglLahir">Tanggal Lahir :</label><br>
                        <input type="date" name="tanggal_lahir" id="tglLahir" class="inputtext">
                    </div>

                    <!-- Input untuk alamat lengkap -->
                    <div class="boxTextForm">
                        <label for="almt">Alamat Lengkap :</label><br>
                        <textarea name="alamat" id="almt" cols="30" rows="5" class="inputtext"></textarea>
                    </div>

                    <!-- Input untuk NISN -->
                    <div class="boxTextForm">
                        <label for="nisnSiswa">Nomor Induk Siswa Nasional (NISN) :</label><br>
                        <input type="number" name="nisn" id="nisnSiswa" class="inputtext">
                    </div>

                    <!-- Pilihan jenis kelamin -->
                    <div class="boxTextForm">
                        <label for="kelamin">Jenis Kelamin :</label><br>
                        <div class="form-group">
                            <select class="isi-option" name="kelamin" id="kelamin" required>
                                <option disabled hidden selected>--Pilih Jenis Kelamin--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Input untuk sekolah asal -->
                    <div class="boxTextForm">
                        <label for="SekolahAsal">Nama Sekolah Asal :</label><br>
                        <input type="text" name="sekolahAsal" id="SekolahAsal" class="inputtext">
                    </div>

                    <!-- Input untuk data orang tua atau wali -->
                    <div class="boxTextForm">
                        <label for="nmorngtua/wali">Nama Orang Tua / Wali :</label><br>
                        <input type="text" name="nmorngtuawali" id="nmorngtuawali" class="inputtext">
                    </div>

                    <!-- Input untuk nomor kontak -->
                    <div class="boxTextForm">
                        <label for="nmrkonfirmasi">Nomor HP / WA :</label><br>
                        <input type="text" maxlength="21" oninput="formatInput(this)" name="nmrkonfirmasi"
                            id="nmrkonfirmasi" class="inputtext">
                    </div>

                    <div class="boxTextForm">
                        <label for="rekomendasi">Rekomendasi Dari :</label>
                        <div class="form-group">
                            <select class="isi-option" name="rekomendasi" id="rekomendasi" required>
                                <option disabled hidden selected>--Pilih Rekomendasi--</option>
                                <option value="Guru/Staf/Pegawai SMK Kesehatan Cianjur">Guru/Staf/Pegawai SMK
                                    Kesehatan Cianjur</option>
                                <option value="Siswa/i SMK Kesehatan Cianjur">Siswa/i SMK Kesehatan Cianjur
                                </option>
                                <option value="Alumni SMK Kesehatan Cianjur">Alumni SMK Kesehatan Cianjur
                                </option>
                                <option value="Guru SMP/MTs">Guru SMP/MTs</option>
                                <option value="Calon Siswa/i SMK Kesehatan Cianjur">Calon Siswa/i SMK Kesehatan
                                    Cianjur</option>
                                <option value="Sosial Media">Sosial Media</option>
                                <option value="Referensi Langsung">Lain-Lain</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tombol submit -->
                    <div>
                        <button type="submit" class="btnSimpan">Kirim Data</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bagian-persyaratan">
            <h1 class="jdl">Informasi PPDB</h1>
            <div class="isijdl">
                <a href="https://bit.ly/BrosurPPDBSKC-25">
                    <img src="/pic/Brosur_PPDB.png" alt="Brosur PPDB">
                </a>
            </div>
        </div>
        <div class="jurusan pb-2">
            <h1 class="jdl">Informasi Jurusan</h1>
            <div class="list-jurusan">
                <a href="/informasi/askep">
                    <img src="/pic/LOGO_ASKEP.png" alt="Logo Asisten Keperawatan">
                </a>
                <a href="/informasi/farmasi">
                    <img src="/pic/LOGO_FARMASI.png" alt="Logo Farmasi">
                </a>
                <a href="/informasi/tlm">
                    <img src="/pic/LOGO_TLM.png" alt="Logo Teknologi Laboratorium">
                </a>
            </div>
        </div>
    </div>

@endsection
