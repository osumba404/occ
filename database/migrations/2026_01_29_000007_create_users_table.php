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
            $table->integer('national_id')->unique();
            $table->string('phone_number')->unique();
            $table->string('surname');
            $table->string('first_middle_name');
            $table->foreignId('institution_id')->constrained('institutions');
            $table->foreignId('polling_station_id')->constrained('polling_stations');
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_admin')->default(false);
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
