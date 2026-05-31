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
        Schema::create('siswas', function (Blueprint $table) {
            // nanti tanyain dulu ke pak adi
            // $table->id(); // pk utama tabel siswa
        
            // // Membuat Foreign Key ke tabel Kelas
            // $table->unsignedBigInteger('id_kelas');
            
            // $table->string('nama');
            // $table->enum('jenis_kelamin', ['L', 'P']);
            // $table->timestamps();

            // // Deklarasi kecocokan relasi
            // $table->foreign('id_kelas')
            //     ->references('id')
            //     ->on('kelas')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
