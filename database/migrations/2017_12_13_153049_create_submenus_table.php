<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topmenu_id')->unsigned();
            $table->string('slug')->unique()->default(null);
            $table->integer('aktivs')->unsigned()->default(1);
            $table->integer('vietaLimeni')->unsigned();


            $table->foreign('topmenu_id')->references('id')->on('topmenus');

            foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $lang) {
                //add here all you translatable attributes
                $table->string('nosaukums_'.$lang)->nullable()->default(null);
            }
            $table->string('languages',30)->default(json_encode(LaravelLocalization::getSupportedLanguagesKeys()));
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
        Schema::dropIfExists('submenus');
    }
}
