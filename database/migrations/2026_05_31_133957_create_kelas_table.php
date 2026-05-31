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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id(); // pk utama tabel kelas
        
            // Membuat Foreign Key ke tabel Guru
            // $table->unsignedBigInteger('id_walikelas');
            
            // $table->string('nama_kelas');
            // $table->enum('tingkat', ['7', '8', '9']); // membatasi isi sesuai gambarmu (7,8,9)
            // $table->timestamps();

            // Deklarasi kecocokan relasi
            // $table->foreign('id_walikelas')
            //     ->references('id_guru')
            //     ->on('gurus')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
