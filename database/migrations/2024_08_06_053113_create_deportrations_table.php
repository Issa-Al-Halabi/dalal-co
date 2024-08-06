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
        Schema::create('deportrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maid_id');
            $table->foreign('maid_id')->references('id')->on('maids')->cascadeOnDelete();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses')->nullOnDelete();
            $table->date('deportration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deportrations');
    }
};
