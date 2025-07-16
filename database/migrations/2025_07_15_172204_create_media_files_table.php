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
        Schema::create('media_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('message_id');
            $table->enum('file_type', ['image', 'voice', 'music']);
            $table->string('file_path', 255);
            $table->string('file_name', 255)->nullable();
            $table->string('mime_type', 100)->nullable();
            $table->timestamp('uploaded_at')->useCurrent();
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_files');
    }
};
