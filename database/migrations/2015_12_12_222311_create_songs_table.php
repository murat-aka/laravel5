<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('lyrics')->nullable();
            $table->string('slug')-> unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('songs');
    }
}


//php artisan make:migration create_songs_table --create="songs"

//$song -> title =  "as long as you love me"

//$song -> slug = "as-long-as-you-love-me"

//$song -> toArray();

// $song -> save();

//App\Song::all();