<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTracklistNullableInAlbumsTable extends Migration
{
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->text('tracklist')->nullable()->change(); // Use text for longer tracklists
        });
    }
    
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->string('tracklist', 1000)->nullable(false)->change(); // Revert back to 255 if rolled back
        });
    }
    
}