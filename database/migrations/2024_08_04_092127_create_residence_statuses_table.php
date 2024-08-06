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
        Schema::create('residence_statuses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('renewal_of_residence_id');
            $table->foreign('renewal_of_residence_id')->references('id')->on('renewal_of_residences')->cascadeOnDelete();

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->cascadeOnDelete();

            $table->json('specifications');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residence_statuses');
    }
};
