<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediaPlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_playlist', function (Blueprint $table) {
            $table->unsignedinteger('playlist_id');
             $table->foreign('playlist_id')->references('id')->on('playlist');
             $table->unsignedinteger('media_id');
           $table->foreign('media_id')->references('id')->on('media');
            $table->primary(['playlist_id','media_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_playlist');
    }
}
