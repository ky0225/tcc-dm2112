<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DmCard;

class CardController extends Controller
{
	public function randomList()
	{
		$cards = DmCard::all();
		return $cards;
	}
}
