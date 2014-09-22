<?php namespace Guiwoda\DomainRequirements\Example\Domain\Repositories;

interface PostsRepository {
	public function latest($amount = 10);

	public function findBy(array $params);
} 