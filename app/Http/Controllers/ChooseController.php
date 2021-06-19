<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Request;
use Session;
use Hash;

class ChooseController extends BaseController
{
    public function choose(){
        if(session('user_id')!=null) 
        return view('chooseavatar')
        ->with('csrf_token',csrf_token());
        else return redirect('login');
    }

    public function checkchoose(){
        $user=User::find(session('user_id'));
        $radio = Request::get('avatar', 0);
        $user->avatar_image=$radio;
        $user->save();
        return redirect('home');
    }
}
