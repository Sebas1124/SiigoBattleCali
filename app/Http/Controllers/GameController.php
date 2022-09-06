<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Game_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function lobby()
    {
        return view('frontend.game.lobby');
    }

    public function create()
    {
        $id_user = Auth::id();

        do { 
            $hex = dechex(rand()); 
        } while 
        (strlen ($hex )  != 8 );

        Game::create([
            'match_room' => $hex
        ]);

        $id_game = Game::WHERE('match_room', $hex)->first()->id_match;

        Game_Details::create([
            'id_match' => $id_game,
            'player' => $id_user,
            'no_rounds' => 1,
            'player__winner' => null,
            'time_match' => '00:00:00',
        ]);

        return redirect()->route('game.start', $hex)->with('created','ok');
    }

    public function search(Request $request)
    {
        $id_user = Auth::id();
        $lobby_exist = Game::WHERE('match_room', $request->lobby)->exists();
        if ($lobby_exist == false) return redirect()->route('lobby')->with('no_exist','ok');

        $lobby_user_exist = Game::WHERE('match_room', $request->lobby)->first();
        $user_exist = Game_Details::WHERE([ 'id_match' => $lobby_user_exist->id_match, 'player' => $id_user])->exists();

        if ($user_exist) return redirect()->route('lobby')->with('exist','ok');

        Game_Details::create([
            'id_match' => $lobby_user_exist->id_match,
            'player' => $id_user,
            'no_rounds' => 1,
            'player__winner' => null,
            'time_match' => '00:00:00',
        ]);

        return redirect()->route('game.start', $request->lobby)->with('created','ok');

    }

    public function start($hex)
    {

        $lobby = Game::WHERE('match_room',$hex)->first();

        $id_game = Game::WHERE('match_room', $hex)->first()->id_match;

        $details = Game_Details::JOIN('users','users.id','player')->WHERE('id_match', $id_game)->get();

        $count_player = 0;

        return view('Frontend.game.wait', compact('lobby', 'details', 'count_player'));
    }
}
