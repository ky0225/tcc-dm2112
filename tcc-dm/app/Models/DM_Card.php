<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DM_Card extends Model
{
	use HasFactory;

	protected $fillable = [
		'id',
		'name',
		'name_kana',
		'category_id',
		'civilization_id',
		'rarity_id',
		'power',
		'cost',
		'mana',
		'ability',
		'description',
		'soul_id',
		'block_id',
		'hall_of_fame_id',
		'release_date',
		'direction',
		'market_price',
	];

	public function category()
	{
		return $this->belongsTo(DM_Category::class);
	}

	public function civilization()
	{
		return $this->belongsTo(DM_Civilization::class);
	}

	public function rarity()
	{
		return $this->belongsTo(DM_Rariry::class);
	}

	public function soul()
	{
		return $this->belongsTo(DM_Soul::class);
	}

	public function block()
	{
		return $this->belongsTo(DM_Block::class);
	}

	public function hallOfFame()
	{
		return $this->belongsTo(DM_Hall_of_fame::class);
	}

	public function cardTribe()
	{
		return $this->hasMany(DM_Card_tribe::class);
	}
}
