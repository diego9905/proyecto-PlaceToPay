<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class StateSeeder extends Seeder
{
    public static function all()
    {

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('states')->insert([

            'name'=> '-- --',

            ]);


           DB::table('states')->insert([

               'name'=> 'Paid',

           ]);
             DB::table('states')->insert([

            'name'=> 'Pending',

            ]);
             DB::table('states')->insert([

            'name'=> 'Voided',

            ]);

             DB::table('states')->insert([

            'name'=> 'Expired',

             ]);

    }
}
