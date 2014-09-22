<?php namespace App\Http\Controllers;

use Guiwoda\DomainRequirements\Example\Domain\Repositories\TagsRepository;
use Illuminate\Routing\Controller;
use Illuminate\View\Factory;

class TagsController extends Controller
{
	/**
	 * @var \Illuminate\View\Factory
	 */
	protected $viewFactory;

	protected $tagsRepository;

	function __construct(Factory $viewFactory, TagsRepository $tagsRepository)
	{
		$this->viewFactory    = $viewFactory;
		$this->tagsRepository = $tagsRepository;
	}

	public function show($id)
	{
		$tag = $this->tagsRepository->find($id);

		return $this->viewFactory->make('posts.search',
			[
				'posts' => $tag->posts()->paginate(10)
			]
		);
	}
}