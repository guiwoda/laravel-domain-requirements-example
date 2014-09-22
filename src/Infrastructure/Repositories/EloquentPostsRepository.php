<?php namespace Guiwoda\DomainRequirements\Example\Infrastructure\Repositories;

use Guiwoda\DomainRequirements\Example\Domain\Entities\Post;
use Guiwoda\DomainRequirements\Example\Domain\Repositories\PostsRepository;

class EloquentPostsRepository implements PostsRepository {
	protected $post;

	function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function latest($amount = 10)
	{
		return $this->post->orderBy('created_at', 'desc')->take(10)->get();
	}
}