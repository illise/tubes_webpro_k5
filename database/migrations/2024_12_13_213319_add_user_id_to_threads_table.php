<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('threads', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id'); // Tambahkan kolom user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Hubungkan ke tabel users
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('threads', function (Blueprint $table) {
            //
        });
    }
};
