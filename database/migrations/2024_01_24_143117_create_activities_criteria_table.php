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
        Schema::create('activities_criteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competence_id');
            $table->string('code_ucl_competence');
            $table->string('key_activity');
            $table->text('performance_criterion');
            $table->timestamps();

            $table->foreign('competence_id')->references('id')->on('competencies');
            $table->foreign('code_ucl_competence')->references('code_ucl')->on('competencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities_criteria');
    }
};
