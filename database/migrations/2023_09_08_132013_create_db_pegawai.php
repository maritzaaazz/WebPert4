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
        Schema::create('db_pegawai', function (Blueprint $table) {
            $table->increments("id_pegawai");
            $table->string("nama_pegawai", 50);
            $table->string("email_pegawai", 50);
            $table->string("phone_pegawai", 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_pegawai');
    }
};
