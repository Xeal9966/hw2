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
use App\Models\Cart;
use App\Models\Acquisti;
use Request;
use Session;
use Hash;
use DB;

class CartController extends BaseController
{
    public function showcart(){
        $user= User::find(session("user_id"));
        if(!isset($user)) return redirect('login');
        return view('cart');
    }

    public function loadcart(){
        $cart= DB::table('cart')
        ->join('games', 'cart.game', '=','games.id_game')
        ->where('cart.user_site',session("user_id"))
        ->select('games.name','games.main_image','games.prezzo',DB::raw('COUNT(games.name) as n'))->groupBy('games.name','games.main_image','games.prezzo')->get();
        return $cart;
    }

    public function loadtot(){
    $tot= DB::table('cart')
    ->join('games', 'cart.game', '=','games.id_game')
    ->where('cart.user_site',session("user_id"))
    ->select(DB::raw('TRUNCATE(sum(games.prezzo),2) as total'))->get();
    return $tot;
    }

    public function addtocart($query){
        $game=Game::where('name',$query)->first();
        $new= new Cart;
        $new->user_site=session("user_id");
        $new->game=$game['id_game'];
        $new->save();
        return 1;
    }

    public function removetocart($query){
        $game=Game::where('name',$query)->first();
        $id=Cart::where('game',$game['id_game'])->where('user_site',session("user_id"))->get();
        DB::table('cart')
        ->where('cart.id_add',$id['0']['id_add'])
        ->delete();
        return 1;
    }

    public function removeall(){
        DB::table('cart')
        ->where('cart.user_site',session("user_id"))
        ->delete();
        return 1;
    }

    public function loadhistory(){
        $hystory= DB::table('acquisti')
        ->join('games', 'acquisti.game', '=','games.id_game')
        ->where('acquisti.buyer',session("user_id"))
        ->select('games.name','games.prezzo','acquisti.created_at')->orderby('acquisti.created_at','desc')->get();
        return $hystory;
    }

    public function buynow(){
        $pass=Cart::where('user_site',session("user_id"))->get();
        for($i=0;$i<count($pass);$i++){
            $acquisto=new Acquisti;
            $acquisto->buyer=session("user_id");
            $acquisto->game=$pass[$i]['game'];
            $acquisto->save();
        }
        DB::table('cart')
        ->where('cart.user_site',session("user_id"))
        ->delete();
        return 1;
    }
}
