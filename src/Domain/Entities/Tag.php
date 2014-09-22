<?php namespace Guiwoda\DomainRequirements\Example\Domain\Entities;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tag extends Eloquent
{
	protected $table = 'tags';

	public function posts()
	{
		return $this->morphedByMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Post', 'taggable');
	}

	public function comments()
	{
		return $this->morphedByMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Post', 'taggable');
	}
}