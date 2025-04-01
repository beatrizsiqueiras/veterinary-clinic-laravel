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
        Schema::create('pet_to_owner', function (Blueprint $table) {
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('owner_id');
            $table->primary(['pet_id', 'owner_id']); 

            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('pet_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_to_owner');
    }
};
