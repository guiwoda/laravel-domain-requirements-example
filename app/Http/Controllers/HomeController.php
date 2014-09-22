<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\Factory;

class HomeController extends Controller
{
	/**
	 * @var \Illuminate\View\Factory
	 */
	protected $viewFactory;

	function __construct(Factory $viewFactory)
	{
		$this->viewFactory = $viewFactory;
	}

	public function showWelcome()
	{
		return $this->viewFactory->make('hello');
	}

}
