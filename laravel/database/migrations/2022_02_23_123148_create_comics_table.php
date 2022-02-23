<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('code', 10);
            $table->string('editor', 60);
            $table->string('writer', 60);
            $table->string('description', 150);
            $table->float('price');
            $table->string('photo')->nullable();
            $table->integer('page')->nullable();
            $table->boolean('adult');
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
        Schema::dropIfExists('comics');
    }
}
