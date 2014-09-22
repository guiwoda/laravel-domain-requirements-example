<?php namespace Guiwoda\DomainRequirements\Example\Domain\Repositories;

interface PostsRepository {
	public function latest($amount = 10);
} 