<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTracklistNullableInAlbumsTable extends Migration
{
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->text('tracklist')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->text('tracklist')->nullable(false)->change();
        });
    }
}