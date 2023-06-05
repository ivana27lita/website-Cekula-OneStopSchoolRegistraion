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
        Schema::connection('mysql')->create('bukasesi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sekula')->constrained('user_sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->date('TanggalMulai');
            $table->date('TanggalSelesai');
            $table->integer('kuotarombel');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukasesi');
    }
};
