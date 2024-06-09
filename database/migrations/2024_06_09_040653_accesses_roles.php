<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accesses_roles', function (Blueprint $table) {
            $table->id('access_role_id');
            $table->foreignId('access_id')->references('access_id')->on('accesses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_id')->references('role_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accesses_roles');
    }
};
