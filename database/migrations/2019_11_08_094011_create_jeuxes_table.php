<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeuxes', function (Blueprint $table) {
            $table->bigIncrements('id_jeu');
            $table->string('name_jeu')->nullable;
            $table->string('version_jeu')->nullable;
            $table->float('price_jeu')->nullable;
            $table->integer('n_rate')->nullable;
            $table->text('desc_jeu')->nullable;
            $table->string('views_count')->default(0);
            $table->bigInteger('id_cat')->unsigned();
            $table->foreign('id_cat')->references('id_cat')->on('categories');
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
        Schema::dropIfExists('jeuxes');
    }
}
