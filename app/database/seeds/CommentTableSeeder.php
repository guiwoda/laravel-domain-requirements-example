<?php

use Guiwoda\DomainRequirements\Example\Domain\Entities\User;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Post;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Comment;
use Illuminate\Database\Eloquent\Model as Eloquent;

class CommentTableSeeder extends FakerSeeder {
	public function run()
	{
		Eloquent::unguard();

		$users = User::all(['id']);

		foreach (Post::all(['id']) as $post)
		{
			for ($i = 0, $max = rand(0, 3); $i < $max; $i++)
			{
				Comment::create(
					[
						'user_id' => $users->random(1)->id,
						'post_id' => $post->id,
						'message' => implode(PHP_EOL, $this->faker->sentences(rand(2, 5)))
					]
				);
			}
		}
	}
} 