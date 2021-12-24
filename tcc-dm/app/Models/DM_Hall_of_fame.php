<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Hall_of_fame extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
	];

	public function card()
	{
		return $this->hasMany(DM_Card::class);
	}
}
