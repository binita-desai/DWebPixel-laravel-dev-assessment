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
        Schema::create('job_post_skill', function (Blueprint $table) {
            $table->integer('job_post_id')->unsigned();
            $table->foreign('job_post_id')->references('id')->on('job_posts')->onDelete('cascade');
            $table->integer('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('job_post_skill');
    }
};
