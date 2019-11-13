<?php

use Illuminate\Database\Seeder;
use App\userModel;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	userModel::truncate();
        userModel::insert([
        	'username'=>'mindaPerdana',
        	'password'=>'mindaPerdana'
        ]);
    }
}
