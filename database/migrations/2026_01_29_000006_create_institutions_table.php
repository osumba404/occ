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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('kuccps_code')->unique()->nullable();
            $table->string('institution_key');
            $table->string('name');
            $table->string('category'); // University, College, TVET
            $table->string('institution_type'); // Public, Private
            $table->string('parent_ministry')->nullable(); // Ministry of Education, Private Institution, University TVET
            $table->string('location'); // County: Nyandarua, Nairobi, etc
            $table->boolean('active')->default(true);
            $table->timestamp('last_synced_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
