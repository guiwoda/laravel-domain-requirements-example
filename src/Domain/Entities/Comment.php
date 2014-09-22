<?php namespace Guiwoda\DomainRequirements\Example\Domain\Entities;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	protected $table = 'comments';

	public function user()
	{
		return $this->belongsTo('Guiwoda\DomainRequirements\Example\Domain\Entities\User');
	}

	/**
	 * I really doubt we'll need to traverse this relation from here, but I'll leave it here
	 * just to be straightforward.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function post()
	{
		return $this->belongsTo('Guiwoda\DomainRequirements\Example\Domain\Entities\Post');
	}
} 