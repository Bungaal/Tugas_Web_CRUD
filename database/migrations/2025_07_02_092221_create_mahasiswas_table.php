<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('NIM')->unique();
            $table->string('Nama');
            $table->string('Prodi');
            $table->string('Email')->unique();
            $table->enum('Status', ['Aktif', 'Lulus', 'Tidak Aktif']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
