<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//$2y$10$TFtG2N7ajAuX5SZTTP6bIuRiq6dLh/yz5Fdj7lgQesfuVzq7g3ZK2  //12345678
       User::create([
		'name'=>"pmrvic@789.com",
		'email'=>"pmrvic@789.com",
		'email_verified_at'=>NULL,
		'password'=>'$2y$10$c6hnX62VscENYOLoV45DLuIhX/q4lvxwyLnGap9eE2KdJOdlaM8ay', //12345678
		'remember_token'=>"2022-03-02 17:55:43",
		'created_at'=>"2022-03-02 16:55:17",
		'updated_at'=>"2022-03-02 16:55:17",
	] );
    }
}
