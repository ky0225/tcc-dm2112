<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Block extends Model
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
