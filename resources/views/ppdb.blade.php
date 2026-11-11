@extends('layout.form') 
@section('main')

{{-- <div>
    <!-- Bagian untuk menampilkan logo utama -->
    <div class="positionlogo">
        <img class="logo1" src="/pic/LOGO_SKC.png" alt="Logo SKC">
    </div>
    <br>
    <div class="positionlogo">
        <!-- Menampilkan logo tambahan (ASKPE, FARMASI, TLM) -->
        <img class="logo2" src="/pic/LOGO_ASKEP.png" alt="Logo Asisten Keperawatan">
        <img class="logo2" src="/pic/LOGO_FARMASI.png" alt="Logo Farmasi">
        <img class="logo2" src="/pic/LOGO_TLM.png" alt="Logo Teknologi Laboratorium Medik">
    </div>
    <br>
</div> --}}

<!-- Container untuk formulir dan (opsional) persyaratan -->
<div class="table-container">

    <!-- Bagian formulir -->
    <div class="bagian-formulir">
        <h1 class="jdl">FORMULIR PENDAFTARAN</h1>
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
                            <option disabled hidden selected>Pilih Jurusan</option>
                            <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                            <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                            <option value="Teknik Laboratorium Medik">Teknik Laboratorium Medik</option>
                        </select>
                    </div>
                </div>

                <div class="boxTextForm">
                    <label for="jurusan">Pilihan Jurusan ke-2 :</label>
                    <p style="font-size: 15px"><i>pilihan ke-2 tidak boleh sama dengan pilihan ke-1</i></p>
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
                    <input type="text" maxlength="21" oninput="formatInput(this)" name="nmrkonfirmasi" id="nmrkonfirmasi" class="inputtext">
                </div>

                <div class="boxTextForm">
                    <label for="rekomendasi">Rekomendasi Dari :</label>
                    <div class="form-group">
                        <select class="isi-option" name="rekomendasi" id="rekomendasi" required>
                            <option disabled hidden selected>--Pilih Rekomendasi--</option>
                            <option value="Guru/Staf/Pegawai SMK Kesehatan Cianjur">Guru/Staf/Pegawai SMK Kesehatan Cianjur</option>
                            <option value="Siswa/i SMK Kesehatan Cianjur">Siswa/i SMK Kesehatan Cianjur</option>
                            <option value="Alumni SMK Kesehatan Cianjur">Alumni SMK Kesehatan Cianjur</option>
                            <option value="Guru SMP/MTs">Guru SMP/MTs</option>
                            <option value="Calon Siswa/i SMK Kesehatan Cianjur">Calon Siswa/i SMK Kesehatan Cianjur</option>
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
</div>

@endsection
