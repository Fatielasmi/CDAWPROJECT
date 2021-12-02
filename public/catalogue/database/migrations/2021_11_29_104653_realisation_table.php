<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RealisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisation', function (Blueprint $table) {
            $table->unsignedbiginteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedinteger('media_id');
          $table->foreign('media_id')->references('id')->on('media');
           $table->primary(['user_id','media_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisation');
    }
}
