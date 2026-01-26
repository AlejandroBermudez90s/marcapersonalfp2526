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
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->unsignedBigInteger('user_id')->unique();
            // crea la clave ajena con users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
>>>>>>> b787e46d1b9ad8bc91201eecd04ed6260afc6094
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculos');
    }
};
