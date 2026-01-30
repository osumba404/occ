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
        Schema::create('counties', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('region_code'); // official region code
            $table->string('name');
            $table->integer('iebc_code')->unique(); // official IEBC code
            $table->boolean('active')->default(true);

            // foreign key explicitly pointing to regions.region_code
            $table->foreign('region_code')->references('region_code')->on('regions')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counties');
    }
};
