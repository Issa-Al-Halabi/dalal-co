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
        Schema::create('m_c_q_s', function (Blueprint $table) {
            $table->id();
            $table->boolean("elderly_care");
            $table->integer("children_care");
            $table->boolean("nursing_course");
            $table->boolean("homework_experience");
            $table->boolean("recepion");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_c_q_s');
    }
};