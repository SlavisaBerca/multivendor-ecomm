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
        Schema::create('page_section_component_boxes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('attribuitable_id')->nullable();
            $table->string('attribuitable_type')->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_section_component_boxes');
    }
};
