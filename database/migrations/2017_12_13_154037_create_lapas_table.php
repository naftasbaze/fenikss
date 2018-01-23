<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->tinyInteger('vietaLimeni')->nullable();
            $table->tinyInteger('aktivs')->nullable()->default(1);
            $table->tinyInteger('tips')->default(0);

            foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $lang) {
                //add here all you translatable attributes
                $table->string('nosaukums_'.$lang)->nullable()->default(null);
                $table->string('virsraksts_'.$lang)->nullable()->default(null);

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
        Schema::dropIfExists('lapas');
    }
}
