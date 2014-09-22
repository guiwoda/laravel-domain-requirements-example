<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Guiwoda\DomainRequirements\Example\Domain\Entities\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends FakerSeeder {
	public function run()
	{
		Eloquent::unguard();

		for ($i = 0; $i < 50; $i++)
		{
			User::create(
				[
					'email'    => $this->faker->email,
					'password' => Hash::make('1234') // Let's be able to log with any user ;-)
				]
			);
		}
	}
} 