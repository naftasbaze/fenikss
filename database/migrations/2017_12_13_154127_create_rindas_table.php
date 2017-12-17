<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRindasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rindas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->unique()->default(null);
            $table->string('fotoLinks')->nullable()->default(null);
            $table->string('fotoThumb')->nullable()->default(null);
            $table->string('fotoKat')->nullable()->default(null);
            $table->tinyInteger('vietaLimeni')->nullable()->index();
            $table->tinyInteger('izkartojums')->unsigned()->default(0);
            $table->date('datums')->nullable();
            $table->tinyInteger('ir_publisks')->unsigned()->default(0);
            $table->tinyInteger('galerija_id')->unsigned()->nullable()->default(null);
            $table->integer('lapa_id')->unsigned();
            $table->foreign('lapa_id')->references('id')->on('lapas');

            foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $lang) {
                //add here all you translatable attributes
                $table->string('nosaukums_'.$lang)->nullable()->default(null);
                $table->text('raksts_'.$lang)->nullable()->default(null);

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
        Schema::dropIfExists('rindas');
    }
}
