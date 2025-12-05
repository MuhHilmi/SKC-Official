<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gelombangtiga', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('jurusan_2');
            $table->string('nisn', 10);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('sekolahAsal');
            $table->string('nmorngtuawali');
            $table->string('nmrkonfirmasi');
            $table->string('rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gelombangtiga');
    }
};
