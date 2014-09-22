<?php namespace Guiwoda\DomainRequirements\Example\Infrastructure\Repositories;

use Guiwoda\DomainRequirements\Example\Domain\Entities\Post;
use Guiwoda\DomainRequirements\Example\Domain\Repositories\PostsRepository;
use Illuminate\Support\Facades\Paginator;

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

	public function search($string, $take = 10, $page = 1)
	{
		$post = clone $this->post;

		Paginator::setCurrentPage($page);

		return $post
			->where(\DB::raw('LOWER(title)'), 'LIKE', \DB::raw("LOWER('%$string%')"))
			->orWhere(\DB::raw('LOWER(message)'), 'LIKE', \DB::raw("LOWER('%$string%')"))
			->paginate($take);
	}
}