<?php

class UserSeeder extends DatabaseSeeder {

    public function run(){

    	$users = [
    	[
	   "username" => "carlos.soliz",
	   "password" => Hash::make("demo"),
	   "email"    => "csoliz7@gmail.com"
	]
    ];

    foreach($users as $user)
    {
    	User::create($user);
    }

 }


}
