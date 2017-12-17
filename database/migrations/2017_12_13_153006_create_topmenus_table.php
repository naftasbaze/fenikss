<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topmenus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->unique()->default(null);
            $table->integer('aktivs')->unsigned()->default(1);
            $table->integer('vietaLimeni')->unsigned();


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
        Schema::dropIfExists('topmenus');
    }
}
