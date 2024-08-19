<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('nama');
            $table->string('npsn');
            $table->string('alamat');
            $table->string('visi');
            $table->string('misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sekolah');
    }
};
