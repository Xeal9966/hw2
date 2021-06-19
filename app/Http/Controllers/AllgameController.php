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

class AllgameController extends BaseController
{
    public function showall(){
        return view('allgames');
    }

    public function loadgames(){
        $games=Game::all();
        return $games;
    }
}