<?php namespace App\Http\Controllers;

use Guiwoda\DomainRequirements\Example\Domain\Repositories\PostsRepository;
use Illuminate\Routing\Controller;
use Illuminate\View\Factory;

class HomeController extends Controller
{
	/**
	 * @var \Illuminate\View\Factory
	 */
	protected $viewFactory;

	/**
	 * @var \Guiwoda\DomainRequirements\Example\Domain\Repositories\PostsRepository
	 */
	protected $postsRepository;

	function __construct(Factory $viewFactory, PostsRepository $postsRepository)
	{
		$this->viewFactory = $viewFactory;
		$this->postsRepository = $postsRepository;
	}

	public function showWelcome()
	{
		$latestPosts = $this->postsRepository->latest(10);

		return $this->viewFactory->make('index', [
			'posts' => $latestPosts
		]);
	}

}
