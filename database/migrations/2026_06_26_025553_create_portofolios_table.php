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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('judul');
            $table->text('deskripsi');
            $table->string('kategori');
            $table->string('thumbnail')->nullable();
            $table->string('file_portofolio')->nullable();
            $table->string('github')->nullable();
            $table->string('demo')->nullable();

            $table->timestamps();
        });
    }
};
