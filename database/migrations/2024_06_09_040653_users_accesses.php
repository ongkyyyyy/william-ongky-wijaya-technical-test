<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_accesses', function (Blueprint $table) {
            $table->id('user_access_id');
            $table->foreignId('users_id')->references('users_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('access_id')->references('access_id')->on('accesses')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_accesses');
    }
};
