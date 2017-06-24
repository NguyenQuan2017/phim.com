<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\User::class,5)->create();
    	User::Insert([
    		'username'=>'admin',
    		'name'=>'Quan',
    		'email'=>'admin@gmail.com',
    		'avatar'=>'abc.jpg',
    		'password'=>bcrypt('admin'),
    		'level'=>'1',
    		'role_id'=>'1',
    		'remember_token'=>str_random(10)
    		]);

    }
}
