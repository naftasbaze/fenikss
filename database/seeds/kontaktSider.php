<?php

use Illuminate\Database\Seeder;

class kontaktSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('kontakts')->get()->count() == 0){

            DB::table('kontakts')->insert([

                [
                    'tel1' => '(+371) 29299574',
                    'tel2' => '(+371) 29236361',
                    'tel3' => '(+371) 67910519',
                    'epasts' => 'info@fenikssko.lv',
                    'adrese' => 'Acones ielā – 16, Ulbroka, Stopiņu nov., LV-2130',
                    'registraNr' => '',
                    'pvnNr' => '',
                    'vienotaisNr' => '',
                    'kontaNr' => '',
                    'banka' => '',
                    'nosaukums_lv' => 'Metālkalšanas un restaurācijas darbnīca “Pundurīši”',
                    'nosaukums_en' => 'Hammered work and restoration workshop "Pundurīši"',
                    'nosaukums_ru' => 'Metālkalšanas un restaurācijas darbnīca “Pundurīši”',
                    'www' => 'http://www.fenikssko.lv',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
