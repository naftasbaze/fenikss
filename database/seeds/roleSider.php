<?php

use Illuminate\Database\Seeder;

class roleSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('roles')->get()->count() == 0){

            DB::table('roles')->insert([

                [
                    'nosaukums' => 'Modeators',
                    'id' => 32,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums' => 'Administrators',
                    'id' => 43,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
