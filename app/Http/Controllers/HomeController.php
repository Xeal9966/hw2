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

class HomeController extends BaseController
{
    public function index(){
        return view('home');
    }

    public function loaduser(){
        $user=User::find(session('user_id'));
        if($user!=null) {
            $json=$user->toarray();
            return $json;
        }
        return 0;
    }

    public function loadgames(){
        $games=Game::all();
        return $games;
    }

    public function loadrecs(){
        $rec= DB::table('recensione')
            ->join('recensore', 'recensione.editor', '=', 'recensore.id_editore')
            ->join('games', 'recensione.gioco', '=', 'games.id_game')
            ->select('recensione.voto', 'recensore.nome', 'games.name')->get();
        return $rec;
    }

}
