<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Tribe extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'name_kana',
	];

	public function cardTribe()
	{
		return $this->hasMany(DM_Card_tribe::class);
	}
}
