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
        Schema::connection('mysql')->create('informasi_sekolah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sekolah')->constrained('user_sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('noTelp');
            $table->string('alamatSekolah', 255);
            $table->string('senin-jumat', 255);
            $table->string('sabtu', 255);
            $table->string('deskripsi fasilitas', 255);
            $table->string('playground', 255);
            $table->string('kolamrenang', 255);
            $table->string('funlearning', 255);
            $table->string('kelas', 255);
            $table->string('persyaratan1', 255);
            $table->string('persyaratan2', 255);
            $table->string('persyaratan3', 255);
            $table->string('persyaratan4', 255);
            $table->string('persyaratan5', 255);
            $table->string('img1', 255)->nullable();
            $table->string('img2', 255)->nullable();
            $table->string('img3', 255)->nullable();
            $table->string('banner', 255)->nullable();
            $table->Integer('npsn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_sekolah');
    }
};
