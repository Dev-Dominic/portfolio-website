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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('techStack'); // comma separate list ['Next.js', 'Tailwindcss', 'React']
            $table->enum('type', ['work', 'personal', 'writing']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};