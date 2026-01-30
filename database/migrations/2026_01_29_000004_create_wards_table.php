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
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('subcounty_code'); // reference subcounty IEBC code
            $table->string('name');
            $table->integer('iebc_code')->unique(); // official ward code
            $table->boolean('active')->default(true);

            // foreign key explicitly pointing to subcounties.iebc_code
            $table->foreign('subcounty_code')->references('iebc_code')->on('subcounties')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
};
