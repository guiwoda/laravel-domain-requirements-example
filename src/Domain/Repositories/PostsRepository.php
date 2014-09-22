<?php namespace Guiwoda\DomainRequirements\Example\Domain\Repositories;

interface PostsRepository {
	public function latest($amount = 10);

	public function findBy(array $params);

	public function search($string, $take = 10, $page = 1);
} 