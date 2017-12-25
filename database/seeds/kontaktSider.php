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
                    'adrese_lv' => 'Acones ielā 16, Ulbroka, Stopiņu nov., LV-2130',
                    'adrese_en' => 'Acones street 16, Ulbroka, Stopiņu reg., LV-2130',
                    'adrese_ru' => 'ylica Acones 16, Ulbroka, Stopiņu nov., LV-2130',
                    'registraNr' => '40003069759',
                    'pvnNr' => 'LV40003069759',
                    'vienotaisNr' => 'LV53ZZZ40003069759',
                    'kontaNr' => 'LV52HABA123456789',
                    'banka_lv' => 'SEB banka',
                    'banka_en' => 'SEB bank',
                    'banka_ru' => 'SEB bank',
                    'banknos_lv' => 'Bankas rekvizīti',
                    'banknos_en' => 'Bank',
                    'banknos_ru' => 'Bank',
                    'dlaiks_lv' => 'Pirmdien - piektdien: no 9:00 to 18:00',
                    'dlaiks_en' => 'Monday-Friday: 9am to 6pm',
                    'dlaiks_ru' => 'Každij deņ',
                    'dlaiknos_lv' => 'Darbalaiks',
                    'dlaiknos_en' => 'Business hours',
                    'dlaiknos_ru' => 'Rabočeje vremja',
                    'nosaukums_lv' => '"FENIKSS-KO" SIA Metālkalšanas un restaurācijas darbnīca “Pundurīši”',
                    'nosaukums_en' => '"FENIKSS-KO" Ltd. Hammered work and restoration workshop "Pundurīši"',
                    'nosaukums_ru' => 'OOO "FENIKSS-KO" Metālkalšanas un restaurācijas darbnīca “Pundurīši”',
                    'www' => 'http://www.fenikssko.lv',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
