<?php

use Guiwoda\DomainRequirements\Example\Domain\Entities\Post;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Comment;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Tag;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TagsTableSeeder extends FakerSeeder
{
	public function run()
	{
		Eloquent::unguard();

		for ($i = 0; $i < 50; $i++)
		{
			Tag::create(
				[
					'name' => strtolower(implode('-', $this->faker->words(rand(1,3))))
				]
			);
		}

		$tags = Tag::all(['id']);

		foreach (Post::all() as $post)
		{
			if ($amount = rand(0, 5))
			{
				$randomTags = $tags->random($amount);

				if ($randomTags instanceof Tag)
				{
					$post->tags()->sync([$randomTags->id]);
				}
				else
				{
					$post->tags()->sync(new \Illuminate\Database\Eloquent\Collection($randomTags));
				}
			}
		}

		foreach (Comment::all() as $comment)
		{
			if ($amount = rand(0, 5))
			{
				$randomTags = $tags->random($amount);

				if ($randomTags instanceof Tag)
				{
					$comment->tags()->sync([$randomTags->id]);
				}
				else
				{
					$comment->tags()->sync(new \Illuminate\Database\Eloquent\Collection($randomTags));
				}
			}
		}
	}
} 