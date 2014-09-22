<?php namespace Guiwoda\DomainRequirements\Example\Domain\Entities;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
	protected $table = 'posts';

	public function user()
	{
		return $this->belongsTo('Guiwoda\DomainRequirements\Example\Domain\Entities\User');
	}

	public function comments()
	{
		return $this->hasMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Comment');
	}

	public function tags()
	{
		return $this->morphToMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Tag', 'taggable');
	}
} 