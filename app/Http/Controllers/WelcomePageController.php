<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;

class WelcomePageController extends Controller
{
	public function index()
	{
		$games = Game::all();	

		$gameData = array();

		foreach($games as $game) {

			$str = preg_replace('/[^a-zA-Z0-9.\/,.]/', '', $game->images);

			$x = explode(',', $str);
			foreach($x as $y) {
				$data['id'] = $game->id;
				$data['image'] = $y;
				$data['name'] = $game->name;
				array_push($gameData, $data);
			}
		}
		

		return view('welcome')->with(['games' => $games,'gameData' => $gameData]);
	}
}
