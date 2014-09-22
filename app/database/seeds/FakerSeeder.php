<?php

use Illuminate\Database\Seeder;

abstract class FakerSeeder extends Seeder {
	protected $faker;

	function __construct()
	{
		$this->faker = \Faker\Factory::create();
	}
}