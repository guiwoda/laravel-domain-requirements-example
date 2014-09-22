<?php namespace Guiwoda\DomainRequirements\Example\Infrastructure\Repositories;
use Guiwoda\DomainRequirements\Example\Domain\Entities\Tag;
use Guiwoda\DomainRequirements\Example\Domain\Repositories\TagsRepository;

class EloquentTagsRepository implements TagsRepository
{
	/**
	 * @var \Guiwoda\DomainRequirements\Example\Domain\Entities\Tag
	 */
	protected $tag;

	function __construct(Tag $tag)
	{
		$this->tag = $tag;
	}

	public function find($id)
	{
		return $this->tag->findOrFail($id);
	}
}