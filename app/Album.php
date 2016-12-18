<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	protected $fillable = [
		'band_id',
		'name',
		'recorded_date',
		'release_date',
		'number_of_tracks',
		'label',
		'producer',
		'genre'
	];

	public function band() {

		return $this->belongsTo('App\Band');

	}
}
