<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaktsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontakts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('tel3');
            $table->string('epasts');
            $table->string('registraNr');
            $table->string('pvnNr');
            $table->string('vienotaisNr');
            $table->string('kontaNr');
            $table->string('www');
            $table->string('keywords');

            foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $lang) {
                //add here all you translatable attributes
                $table->string('nosaukums_'.$lang)->nullable()->default(null);
                $table->string('adrese_'.$lang)->nullable()->default(null);
                $table->string('adrnos_'.$lang)->nullable()->default(null);
                $table->string('banka_'.$lang)->nullable()->default(null);
                $table->string('banknos_'.$lang)->nullable()->default(null);
                $table->string('dlaiks_'.$lang)->nullable()->default(null);
                $table->string('dlaiknos_'.$lang)->nullable()->default(null);
                $table->string('saits_'.$lang)->nullable()->default(null);
                $table->string('desription_'.$lang)->nullable()->default(null);

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
        Schema::dropIfExists('kontakts');
    }
}
