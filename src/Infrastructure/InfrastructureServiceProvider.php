<?php namespace Guiwoda\DomainRequirements\Example\Infrastructure;

use Illuminate\Support\ServiceProvider;

class InfrastructureServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$ns = 'Guiwoda\DomainRequirements\Example';
		$this->app->bind("$ns\\Domain\\Repositories\\PostsRepository", "$ns\\Infrastructure\\Repositories\\EloquentPostsRepository", true);
	}
}