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
        Schema::create('formulirsimpan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_school1')->constrained('user_sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->string('emailortu',255);
            $table->string('namaanak',255);
            $table->string('jenjanganak',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirsimpan');
    }
};
