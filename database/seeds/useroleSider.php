<?php

use Illuminate\Database\Seeder;

class useroleSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('role_user')->get()->count() == 0){

            DB::table('role_user')->insert([

                [
                    'user_id' => 1,
                    'role_id' => 43,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
