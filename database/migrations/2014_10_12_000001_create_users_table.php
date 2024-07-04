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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('place_of_birth');
            $table->string('country_of_birth');
            $table->date('date_of_birth');
            $table->char('gender');
            $table->string('jmbg')->unique();
            $table->string('mobile_phone')->unique();
            $table->string('email')->unique();
            $table->string('verification_code')->nullable();
            $table->string('is_verified')->default(value: 0);
            $table->string('username')->unique();
            $table->string('password');
            $table->string('profile_picture')->nullable()->default(null);
            $table->string('type')->default('user');
            $table->string('status')->default('approved');
            $table->rememberToken();
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

