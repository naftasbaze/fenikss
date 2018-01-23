<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('galerija_id')->nullable()->unsigned();
            $table->integer('aktivs');
            $table->tinyInteger('vietaLimeni')->nullable()->index();
            $table->string('btn_links');
            $table->string('btn_krasa');
            $table->string('btn_top');
            $table->string('btn_left');

            $table->foreign('galerija_id')->references('id')->on('galerijas');

            foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $lang) {
                //add here all you translatable attributes
                $table->string('lpp_'.$lang)->nullable()->default(null);
                $table->string('btnlabel_'.$lang)->nullable()->default(null);
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
        Schema::dropIfExists('katalogs');
    }
}
