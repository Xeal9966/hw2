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

class LoginController extends BaseController
{
    public function login(){
        $user= User::find(session("user_id"));
        if(isset($user)) return redirect('home');
        $old_mail=Request::old('email');
        return view('login')
        ->with('csrf_token',csrf_token())->with('old_mail',$old_mail);
    }

    public function checklogin(){
        $result=User::where('email',request('email'))->first();
        if(!isset($result)) {
            return redirect('login')->withInput(); 
        }
        $flag=Hash::check(request('password'),$result->password);
        if(!$flag){
            return redirect('login')->withInput();
        }
        Session::put('user_id',$result->id);
        return redirect('home');
    }

    public function logout(){
        Session::flush();
        return redirect('home');
    }
}
