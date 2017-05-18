<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('katanalotes')->delete();
     DB::table('katanalotes')->insert(array(

        'onoma'->'xaris',
            'epitheto'->'georgiadis',
            'id'->'12345'
            ));
}

        Model::reguard();
    }
}
