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
        //factory(App\Test_table::class)->create();
        //factory(App\Test_table::class, 5)->create();
        //factory(App\Test_table::class, 15)->create();
        //factory(App\Test_table::class, 20)->create();
        factory(App\Test_table::class, 60)->create();
    }
}
