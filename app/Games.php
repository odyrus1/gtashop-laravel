<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
	public $timestamps = false;
    protected $table = 'games';

		public function getSlugAttribute()
		{
			return str_slug($this->name, '-');
		}
}
