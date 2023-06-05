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
        Schema::create('respons_formulir', function (Blueprint $table) {
            $table->id('idFormulir');
            $table->foreignId('id_sekolah2')->constrained('user_sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->string('namalengkap_pd');
            $table->string('namapanggilan_pd');
            $table->integer('nik_pesertadidik');
            $table->string('kewarganegaraan_pd');
            $table->string('tempat_pd');
            $table->date('tanggallahir_pd');
            $table->string('alamat_pd');
            $table->string('agama_pd');
            $table->integer('anakke_pd');
            $table->integer('jumlahsaudara_pd');
            $table->string('jenjang')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('nama_ay');
            $table->integer('nik_ay');
            $table->string('pekerjaan_ay');
            $table->string('pendidikan_ay');
            $table->date('ttl_ay');
            $table->integer('telpon_ay');
            $table->string('alamat_ay');
            $table->string('nama_ib');
            $table->integer('nik_ib');
            $table->string('pekerjaan_ib');
            $table->string('pendidikan_ib');
            $table->date('ttl_ib');
            $table->integer('telpon_ib');
            $table->string('alamat_ib');
            $table->integer('tinggi_ank');
            $table->integer('berat_ank');
            $table->string('rk_cacar')->nullable();
            $table->string('rk_tbc')->nullable();
            $table->string('rk_asma')->nullable();
            $table->string('rk_lainnya')->nullable();
            $table->string('ri_polio')->nullable();
            $table->string('ri_rubella')->nullable();
            $table->string('ri_vaksin8')->nullable();
            $table->string('ri_lainnya')->nullable();
            $table->string('akta',255);
            $table->string('kk',255);
            $table->string('ft',255);
            $table->string('bayar',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respons_formulir');
    }
};
