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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('file_path'); // Path to the image file
            $table->string('file_name'); // Name of the image file
            $table->string('file_type'); // Type of the image file
            $table->unsignedBigInteger('imageable_id'); // Polymorphic relationship ID
            $table->string('imageable_type'); // Polymorphic relationship type
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
