<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Card_tribe extends Model
{
	use HasFactory;

	public function card()
	{
		return $this->belongsTo(DM_Card::class);
	}

	public function tribe()
	{
		return $this->belongsTo(DM_Tribe::class);
	}
}
