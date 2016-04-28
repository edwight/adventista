<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
        DB::('users')->insert([
        	'name'=>'edwight',
        	'email'=>'edwardelgado0@gmail.com',
        	'roles'=>'admin',
        	'password'=>'123456'
        	]
        );
        */
        /*
        App/User::create([
        	'name'=>'edwight',
        	'email'=>'edwardelgado0',
        	'roles'=>'admin',
        	'password'=>'123456'
        	]);
        */
        factory(App\User::class, 10)->create();
        /* factory personalizados */
        factory(App\User::class)->create([
        	'name'=>'edwight',
        	'email'=>'edwardelgado0@gmail.com',
        	'password'=>'123456',
        	'roles'=>'admin'
        	]);
    }
}
