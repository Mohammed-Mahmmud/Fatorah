<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void{
		//
		User::updateorcreate(['email' => 'mohamed@mail.com'], [
			'name' => 'mohamed',
			'email' => 'mohamed@mail.com',
			'password' => Hash::make('123456789'),
		]);

	}
}
