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
		return $this->post->with(['user', 'comments'])->orderBy('created_at', 'desc')->take(10)->get();
	}

	public function findBy(array $params)
	{
		$post = clone $this->post;

		foreach ($params as $column => $value)
		{
			$post = $post->where($column, '=', $value);
		}

		return $post->get();
	}
}