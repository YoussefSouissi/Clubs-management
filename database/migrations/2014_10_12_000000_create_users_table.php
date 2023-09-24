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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dateDeNaissance')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['chef', 'membre', 'etudiant', 'Admin']);
            $table->unsignedBigInteger('club_id')->nullable();
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};