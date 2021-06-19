<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Game;
use App\Models\Editor;
use App\Models\Rec;
use Request;
use Session;
use Hash;
use DB;
use Http;

class GameinfoController extends BaseController
{
    public function loadinfoes($nome){
        $game=Game::where('name',$nome)->first();
        $rec= DB::table('recensione')
        ->join('recensore', 'recensione.editor', '=', 'recensore.id_editore')
        ->where('recensione.gioco',$game['id_game'])
        ->select('recensione.voto', 'recensore.nome')->get();
        return view('gamedetails')->with('game',$game)->with('rec',$rec);
    }

    public function api($query){
        /*$url='http://www.gamespot.com/api/videos/?api_key=b4c88e0bb8a47d74188f87b316e4ab8522386ea9&format=json&limit=5&filter=title:'.''.$query;*/
        $json=Http::get('http://www.gamespot.com/api/videos/',['api_key'=>env('VIDEO_APIKEY'),'format'=>'json','limit'=>'5','filter'=>'title:'.$query]);
        return $json;
    }
}
