<?php namespace App\Http\Controllers;

use Guiwoda\DomainRequirements\Example\Domain\Repositories\PostsRepository;
use Illuminate\Routing\Controller;
use Illuminate\View\Factory;

class PostsController extends Controller
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

	public function index()
	{
		return $this->viewFactory->make('posts.search', [
			'posts' => $this->postsRepository->search(\Input::get('q', ''), 10, \Input::get('page', 1))
		]);
	}

	public function show($id)
	{
		return $this->viewFactory->make('post', [
			'post' => $this->postsRepository->findBy(['id' => $id])->first()
		]);
	}
} 