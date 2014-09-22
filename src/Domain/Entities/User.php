<?php namespace Guiwoda\DomainRequirements\Example\Domain\Entities;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
		return $this->hasMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Post');
	}

	/**
	 * I really doubt we'll need to traverse this relation from here, but I'll leave it here
	 * just to be straightforward.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->hasMany('Guiwoda\DomainRequirements\Example\Domain\Entities\Comment');
	}
}
