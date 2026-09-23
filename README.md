# Sistem Informasi SMK Kesehatan Cianjur 🏥

<p align="center">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5 Badge">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3 Badge">
</p>

Ini adalah repositori resmi untuk Sistem Informasi SMK Kesehatan Cianjur (SKC). Proyek ini bertujuan untuk menyediakan platform terpusat untuk mengelola berbagai aspek operasional sekolah, dari manajemen siswa hingga penjadwalan dan banyak lagi.

## Fitur Utama ✨

*   **Manajemen Pengguna yang Kuat:** 🧑‍💼 Sistem otentikasi dan otorisasi yang komprehensif untuk mengelola peran dan izin pengguna.
*   **Dashboard Informatif:** 📊 Tampilan dashboard yang intuitif dengan metrik dan visualisasi kunci untuk memberikan wawasan sekilas.
*   **Autentikasi Modern:** 🔒 Implementasi fitur-fitur keamanan modern seperti konfirmasi password dan verifikasi email.

## Tech Stack 🛠️

*   Bahasa Pemrograman: JavaScript, PHP
*   Framework: Laravel 11
*   Database: MySQL
*   Frontend: Bootstrap, Tailwind CSS, HTML, CSS

## Instalasi & Menjalankan 🚀

1.  Clone repositori:
    ```bash
    git clone https://github.com/FrostLeaf15/SKC-Official
    ```
2.  Masuk ke direktori:
    ```bash
    cd SKC-Official
    ```
3.  Install dependensi:
    ```bash
    composer install
    npm install # atau yarn install
    ```
4.  Konfigurasi environment: Salin `.env.example` menjadi `.env` dan sesuaikan pengaturan database.
    ```bash
    cp .env.example .env
    ```
    Kemudian edit file `.env` untuk konfigurasi database MySQL Anda.
5.  Generate key aplikasi Laravel:
    ```bash
    php artisan key:generate
    ```
6.  Migrasi database dan seed:
    ```bash
    php artisan migrate --seed
    ```
7.  Jalankan proyek:
    ```bash
    php artisan serve
    npm run dev # Untuk development
    ```

## Cara Berkontribusi 🤝

1.  Fork repositori ini.
2.  Buat branch untuk fitur Anda (`git checkout -b feature/nama-fitur`).
3.  Commit perubahan Anda (`git commit -m 'Tambahkan fitur baru'`).
4.  Push ke branch Anda (`git push origin feature/nama-fitur`).
5.  Buat Pull Request.

## Lisensi 📄

Tidak disebutkan.


---
README.md ini dihasilkan secara otomatis oleh [README.MD Generator](https://github.com/emRival) — dibuat dengan ❤️ oleh [emRival](https://github.com/emRival)
