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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('nomorktp');
            $table->string('nomorhp');
            $table->integer('idkecamatan');
            $table->string('alamatlengkap');
            $table->integer('idjenisperkara');
            $table->string('alasanketerangan');
            $table->timestamps();
        });

        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->foreign('idkecamatan')->references('id')->on('kecamatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
