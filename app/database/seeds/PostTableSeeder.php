<?php

use Guiwoda\DomainRequirements\Example\Domain\Entities\User;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Post;
use Illuminate\Database\Eloquent\Model as Eloquent;

class PostTableSeeder extends FakerSeeder {
	public function run()
	{
		Eloquent::unguard();

		foreach (User::all(['id']) as $user)
		{
			for ($i = 0, $max = rand(0, 3); $i < $max; $i++)
			{
				Post::create(
					[
						'user_id' => $user->id,
						'title'   => $this->faker->sentence(),
						'message' => implode(PHP_EOL, $this->faker->sentences(rand(2, 5)))
					]
				);
			}
		}
	}
} 