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
        Schema::create('personal_identities', function (Blueprint $table) {
            $table->id('personal_identity_id');
            $table->foreignId('users_id')->references('users_id')->on('users')->onDelete('cascade');
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('berlaku_hingga')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan_desa')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('kota_kabupaten')->nullable();
            $table->string('nama_ktp')->nullable();
            $table->string('nik')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('ktp_image_file')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('idt_personals');
    }
};
