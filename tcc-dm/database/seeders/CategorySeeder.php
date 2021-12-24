<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dm_categories')->insert([
			[
				'name' => 'クリーチャー',
				'name_kana' => 'くりーちゃー',
			],
			[
				'name' => '進化クリーチャー',
				'name_kana' => 'しんかくりーちゃー',
			],
			[
				'name' => '呪文',
				'name_kana' => 'じゅもん',
			],
		]);
	}
}
