<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(topmenuSider::class);
        $this->call(submenuSider::class);
        $this->call(lapasSider::class);
        $this->call(rindasSider::class);
        $this->call(kategorsSider::class);
        $this->call(galerijaSider::class);
        /*$this->call(fotoSider::class);*/
        $this->call(roleSider::class);
        $this->call(kontaktSider::class);
        $this->call(katalogs::class);
        $this->call(useroleSider::class);

    }
}
