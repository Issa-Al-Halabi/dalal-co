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
        Schema::create('give_in_statuses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('give_in_order_id');
            $table->foreign('give_in_order_id')->references('id')->on('give_in_orders')->cascadeOnDelete();

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
        Schema::dropIfExists('give_in_statuses');
    }
};
