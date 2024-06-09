<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id('role_permission_id');
            $table->foreignId('role_id')->references('role_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('permission_id')->references('permission_id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
};
