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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User's full name
            $table->string('email')->unique(); // User's email
            $table->string('password'); // Password (encrypted)
            $table->enum('role', ['admin', 'teacher', 'student']); // Role of the user
            $table->boolean('is_active')->default(true); // Account status (active or inactive)
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
