<?php

use Illuminate\Database\Seeder;

class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\todos ::class,5)->create();
    }
}
