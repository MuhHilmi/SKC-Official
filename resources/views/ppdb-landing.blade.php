@extends('app')

@section('title', 'SPMB - SMK Kesehatan Cianjur')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/ppdb-landing.css') }}">
@endpush

@section('content')
    <div class="ppdb-landing">
        <header class="ppdb-hero" id="atas">
            <div class="ppdb-shell">
                <div class="ppdb-hero-grid">
                    <div>
                        <p class="ppdb-eyebrow">SPMB Tahun Ajaran 2027/2028</p>
                        <h1>Pendaftaran <em>Siswa Baru</em></h1>
                        <p class="ppdb-lead">
                            Hallo, terima kasih atas minat Anda untuk mengenal SMK Kesehatan lebih dekat.
                            Kami senang dapat berbagi informasi lebih jauh mengenai kami, program keahlian,
                            kegiatan pembelajaran, serta berbagai hal yang perlu Anda ketahui sebelum menjadi
                            bagian dari keluarga besar SMK Kesehatan Cianjur.
                        </p>
                        <p class="ppdb-lead">
                            Halaman ini menjadi langkah awal untuk mengenal kami lebih dekat dan mendapatkan
                            informasi seputar proses penerimaan peserta didik baru tahun ajaran 2027/2028.
                            Selamat menjelajahi dan semoga menemukan pilihan pendidikan yang tepat!
                        </p>
                        <div class="ppdb-cta-row">
                            <a class="ppdb-btn ppdb-btn-primary" href="{{ url('/informasi') }}">Daftar Sekarang</a>
                            <a class="ppdb-btn ppdb-btn-ghost" href="{{ asset('pic/Brosur_PPDB.png') }}" target="_blank"
                                rel="noopener">Unduh Brosur</a>
                        </div>
                    </div>
                    <aside class="ppdb-stamp" aria-label="Ringkasan SPMB">
                        <span class="ppdb-stamp-no">SPMB / 2027-2028</span>
                        <dl>
                            <div>
                                <dt>Pendaftaran dibuka</dt>
                                <dd>September 2026 &ndash; April 2027</dd>
                            </div>
                            <div>
                                <dt>Gelombang</dt>
                                <dd>2 gelombang pendaftaran</dd>
                            </div>
                            <div>
                                <dt>Jadwal seleksi</dt>
                                <dd>09 Februari &amp; 02 Mei 2027</dd>
                            </div>
                            <div>
                                <dt>Program keahlian</dt>
                                <dd>3 program keahlian</dd>
                            </div>
                        </dl>
                    </aside>
                </div>
            </div>
        </header>

        <nav class="ppdb-shell ppdb-jump" aria-label="Navigasi halaman SPMB">
            <a href="#jurusan">Program</a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="#alur">Alur</a>
            <a href="#timeline">Timeline</a>
            <a href="#kontak">Kontak</a>
        </nav>

        <section class="ppdb-section" id="jurusan">
            <div class="ppdb-shell">
                <div class="ppdb-section-head">
                    <p class="ppdb-eyebrow">Program Keahlian</p>
                    <h2>Kenali Potensi, tentukan pilihanmu!</h2>
                    <p>
                        SMK Kesehatan Cianjur memiliki tiga program keahlian yang dirancang untuk membekali
                        peserta didik dengan pengetahuan, keterampilan, dan kompetensi sesuai kebutuhan dunia
                        kesehatan. Melalui pembelajaran teori, praktik, dan pengalaman belajar bersama mitra
                        dunia kerja, peserta didik dipersiapkan menjadi lulusan yang kompeten, profesional,
                        dan siap melanjutkan pendidikan maupun memasuki dunia kerja.
                    </p>
                </div>
                <div class="ppdb-programs">
                    <article class="ppdb-program">
                        <h3>Layanan Kesehatan</h3>
                        <p>
                            Program keahlian yang berfokus pada pengembangan kompetensi dasar pelayanan
                            kesehatan dan asuhan keperawatan. Peserta didik dibekali keterampilan dalam
                            memberikan bantuan pelayanan kesehatan dasar, perawatan diri, komunikasi
                            terapeutik, serta penerapan prinsip keselamatan dan kesehatan kerja.
                        </p>
                        <p class="ppdb-focus">
                            <strong>Fokus kompetensi:</strong> Pelayanan kesehatan dasar, keperawatan,
                            komunikasi, dan keselamatan pasien.
                        </p>
                    </article>
                    <article class="ppdb-program">
                        <h3>Teknologi Farmasi</h3>
                        <p>
                            Program keahlian yang mempelajari bidang kefarmasian, mulai dari pengenalan obat,
                            pengelolaan sediaan farmasi, pelayanan kefarmasian, hingga dasar-dasar peracikan
                            dan penyiapan obat sesuai prosedur. Peserta didik dipersiapkan memiliki ketelitian,
                            kedisiplinan, dan pemahaman dalam mendukung pelayanan kefarmasian.
                        </p>
                        <p class="ppdb-focus">
                            <strong>Fokus kompetensi:</strong> Pengelolaan obat, pelayanan kefarmasian, dan
                            teknologi sediaan farmasi.
                        </p>
                    </article>
                    <article class="ppdb-program">
                        <h3>Teknik Laboratorium Medik</h3>
                        <p>
                            Program keahlian yang berfokus pada keterampilan dasar pemeriksaan laboratorium
                            medik. Peserta didik mempelajari pengenalan alat dan bahan laboratorium, penanganan
                            spesimen, prosedur pemeriksaan dasar, serta penerapan keselamatan dan kesehatan
                            kerja di lingkungan laboratorium.
                        </p>
                        <p class="ppdb-focus">
                            <strong>Fokus kompetensi:</strong> Teknik laboratorium, penanganan spesimen,
                            pemeriksaan dasar, dan K3 laboratorium.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppdb-section ppdb-band" id="keunggulan">
            <div class="ppdb-shell">
                <div class="ppdb-section-head">
                    <p class="ppdb-eyebrow">Keunggulan</p>
                    <h2>Mengapa SMK Kesehatan Cianjur?</h2>
                    <p>
                        Kami menghadirkan pengalaman belajar yang mendukung pengembangan kompetensi dan
                        karakter peserta didik.
                    </p>
                </div>
                <div class="ppdb-keunggulan">
                    <ul class="ppdb-advantages">
                        <li>
                            <h3>Pembelajaran Berbasis Praktik</h3>
                            <p>Mengembangkan keterampilan melalui pembelajaran teori dan praktik sesuai program
                                keahlian.</p>
                        </li>
                        <li>
                            <h3>Fasilitas Pembelajaran</h3>
                            <p>Didukung ruang belajar dan fasilitas praktik untuk menunjang proses pembelajaran.</p>
                        </li>
                        <li>
                            <h3>Kemitraan Dunia Kerja</h3>
                            <p>Menjalin kolaborasi dengan berbagai mitra dunia usaha dan dunia industri.</p>
                        </li>
                        <li>
                            <h3>Peluang Karier dan Pendidikan</h3>
                            <p>Mempersiapkan lulusan untuk siap bekerja maupun melanjutkan pendidikan.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="ppdb-section" id="alur">
            <div class="ppdb-shell">
                <div class="ppdb-section-head">
                    <p class="ppdb-eyebrow">Alur Pendaftaran</p>
                    <h2>Mudah dan Praktis, Ini Alur Pendaftarannya!</h2>
                </div>
                <div class="ppdb-flow">
                    <div class="ppdb-step">
                        <h3>Pendaftaran</h3>
                        <p>
                            Lakukan pendaftaran dengan mengisi formulir pendaftaran peserta didik baru.
                            Pendaftaran dapat dilakukan secara langsung dengan datang ke kampus SMK Kesehatan
                            Cianjur atau secara online.
                        </p>
                    </div>
                    <div class="ppdb-step">
                        <h3>Mengikuti Seleksi</h3>
                        <p>
                            Calon peserta didik mengikuti rangkaian seleksi yang diselenggarakan oleh panitia
                            SPMB, meliputi:
                        </p>
                        <ul class="ppdb-selection">
                            <li>Psikotes</li>
                            <li>Tes kesehatan dan buta warna</li>
                            <li>Wawancara</li>
                        </ul>
                    </div>
                    <div class="ppdb-step">
                        <h3>Daftar Ulang</h3>
                        <p>
                            Calon peserta didik yang telah menyelesaikan tahapan seleksi dapat melanjutkan ke
                            proses daftar ulang dengan melengkapi persyaratan administrasi dan menyelesaikan
                            ketentuan biaya pendidikan sesuai informasi dari panitia. Setelah proses daftar
                            ulang selesai, peserta didik resmi tercatat sebagai calon siswa SMK Kesehatan
                            Cianjur.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ppdb-section ppdb-band" id="timeline">
            <div class="ppdb-shell">
                <div class="ppdb-section-head">
                    <p class="ppdb-eyebrow">Timeline SPMB</p>
                    <h2>Catat Tanggal Penting SPMB 2027/2028</h2>
                    <p>
                        SMK Kesehatan Cianjur membuka pendaftaran peserta didik baru melalui dua gelombang
                        pendaftaran. Pastikan Anda memperhatikan jadwal setiap gelombang dan mengikuti tahapan
                        seleksi sesuai waktu yang telah ditentukan.
                    </p>
                </div>
                <div class="ppdb-timeline">
                    <article class="ppdb-wave">
                        <span class="ppdb-tag">Gelombang 1</span>
                        <h3>September &ndash; Desember 2026</h3>
                        <dl>
                            <div>
                                <dt>Tanggal pelaksanaan seleksi</dt>
                                <dd>09 Februari 2027</dd>
                            </div>
                            <div>
                                <dt>Biaya psikotes dan tes kesehatan</dt>
                                <dd class="ppdb-price">Rp 250.000</dd>
                            </div>
                        </dl>
                    </article>
                    <article class="ppdb-wave">
                        <span class="ppdb-tag">Gelombang 2</span>
                        <h3>Januari &ndash; April 2027</h3>
                        <dl>
                            <div>
                                <dt>Tanggal pelaksanaan seleksi</dt>
                                <dd>02 Mei 2027</dd>
                            </div>
                            <div>
                                <dt>Biaya psikotes dan tes kesehatan</dt>
                                <dd class="ppdb-price">Rp 300.000</dd>
                            </div>
                        </dl>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppdb-section" id="kontak">
            <div class="ppdb-shell">
                <div class="ppdb-section-head">
                    <p class="ppdb-eyebrow">Kontak Panitia</p>
                    <h2>Tanya soal SPMB atau biaya pendidikan?</h2>
                    <p>
                        Hubungi staf kami secara langsung. Nama dan nomor di bawah adalah contoh, ganti dengan
                        data panitia sekolah.
                    </p>
                </div>
                <div class="ppdb-staff">
                    <div class="ppdb-person">
                        <div class="ppdb-avatar">
                            <img src="{{ asset('pic/Guru/tlm/guru1.jpg') }}" alt="Admin 1" loading="lazy">
                        </div>
                        <div>
                            <p><strong>Admin 1</strong></p>
                            <p class="ppdb-role">Ketua Panitia Penerimaan</p>
                            <p class="ppdb-num">0812-0000-0001</p>
                            <button class="ppdb-copy" data-n="0812-0000-0001">Salin nomor</button>
                        </div>
                    </div>
                    <div class="ppdb-person">
                        <div class="ppdb-avatar">
                            <img src="{{ asset('pic/Guru/tlm/guru2.jpg') }}" alt="Admin 2" loading="lazy">
                        </div>
                        <div>
                            <p><strong>Admin 2</strong></p>
                            <p class="ppdb-role">Kepala Bagian Keuangan</p>
                            <p class="ppdb-num">0812-0000-0002</p>
                            <button class="ppdb-copy" data-n="0812-0000-0002">Salin nomor</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ppdb-final">
            <div class="ppdb-shell">
                <div class="ppdb-final-text">
                    <h2>Tentukan Pilihanmu, Raih Masa Depanmu!</h2>
                    <p>
                        Setiap program keahlian memiliki keunggulan dan peluang pengembangan karier
                        masing-masing. Bersama SMK Kesehatan Cianjur, kembangkan potensi, asah keterampilan,
                        dan persiapkan dirimu menjadi generasi yang kompeten serta siap berkontribusi di bidang
                        kesehatan.
                    </p>
                </div>
                <div class="ppdb-cta-row">
                    <a class="ppdb-btn ppdb-btn-primary" href="{{ url('/informasi') }}">Daftar Sekarang</a>
                    <a class="ppdb-btn ppdb-btn-ghost" href="{{ asset('pic/Brosur_PPDB.png') }}" target="_blank"
                        rel="noopener">Unduh Brosur</a>
                </div>
            </div>
        </section>
    </div>

    <script>
        (function () {
            [].forEach.call(document.querySelectorAll(".ppdb-copy"), function (btn) {
                btn.addEventListener("click", function () {
                    var text = btn.dataset.n;
                    var reset = function () {
                        btn.textContent = "Salin nomor";
                    };

                    var done = function () {
                        btn.textContent = "Tersalin";
                        setTimeout(reset, 1500);
                    };

                    try {
                        navigator.clipboard.writeText(text).then(done, function () {
                            if (btn.previousElementSibling) {
                                window.getSelection().selectAllChildren(btn.previousElementSibling);
                            }
                        });
                    } catch (e) {
                        if (btn.previousElementSibling) {
                            window.getSelection().selectAllChildren(btn.previousElementSibling);
                        }
                    }
                });
            });
        })();
    </script>
@endsection
