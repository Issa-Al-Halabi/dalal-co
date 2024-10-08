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
        Schema::create('maids', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('age')->nullable();

            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->cascadeOnDelete();

            $table->unsignedBigInteger('owner_id')->nullable(); // users_owner_id_foreign
            $table->foreign('owner_id')->references('id')->on('users')->nullOnDelete();

            $table->date('residence_expire_at')->nullable();

            $table->longText('description')->nullable();
            $table->string('languages')->default('{"ar":[],"en":[]}')->nullable();
            $table->string('countries')->nullable();
            $table->string('experiences')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maids');
    }
};
