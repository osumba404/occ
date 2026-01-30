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
        Schema::create('subcounties', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('county_code'); // reference county IEBC code
            $table->string('name');
            $table->unsignedInteger('iebc_code')->unique(); // official subcounty code
            $table->boolean('active')->default(true);

            // foreign key explicitly pointing to counties.iebc_code
            $table->foreign('county_code')->references('iebc_code')->on('counties')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcounties');
    }
};
