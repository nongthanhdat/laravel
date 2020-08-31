<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([            
            'name'    => 'nongthanhdat',
            'email'    => 'dat1@gmail.com',
            'password'   =>  Hash::make('password'),
            //'rememberToken' =>  str_random(10),
        ]);
    }
}
