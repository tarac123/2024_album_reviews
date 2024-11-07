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
        Schema::create('albums', function (Blueprint $table) {
            $table->id('albumID');              // Primary Key: albumID
            $table->string('title');             // Album title
            $table->string('artist');            // Album artist
            // $table->unsignedBigInteger('genreID'); // Foreign Key: genreID (assuming this references a genres table)
            $table->string('tracklist')->default('')->change();       // List of tracks (could be text for flexibility)
            $table->integer('duration');
            $table->string('image')->nullable(); // URL to the album's image
            $table->date('release_date');        // Release date of the album
            $table->string('listen_link')->nullable(); // Link to listen to the album
            $table->timestamps();
    
            // // Foreign key constraint
            // $table->foreign('genreID')->references('id')->on('genres')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
