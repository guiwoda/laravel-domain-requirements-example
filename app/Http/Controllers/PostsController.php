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

	public function show($id)
	{
		return $this->viewFactory->make('post', [
			'post' => $this->postsRepository->findBy(['id' => $id])->first()
		]);
	}
} 