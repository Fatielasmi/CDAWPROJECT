<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbonnementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnement', function (Blueprint $table) {
            $table->unsignedbiginteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedinteger('playlist_id');
          $table->foreign('playlist_id')->references('id')->on('playlist');
           $table->primary(['playlist_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnement');
    }
}
