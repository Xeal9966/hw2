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

class SignupController extends BaseController
{
    public function signup(){
        return view('signup')->with('csrf_token',csrf_token())
        ->with('old_nome',null)
        ->with('old_cognome',null)
        ->with('old_email',null);
    }

    public function checksignup(){
        if (request('nome')!=null && request('cognome')!=null && request('email')!=null && request('password')!=null && request('againpassword')!=null )
            {   
                $error = array();
        
                # PASSWORD
                if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/',request('password'))) {
                    $error[] = "Password non valida, utilizza caratteri alfanumerici e maiuscole";
                }
                if (strlen(request('password')) < 8) {
                    $error[] = "Caratteri password insufficienti (almeno 8 caratteri)";
                } 
                # CONFERMA PASSWORD
                if (strcmp(request('password'), request('againpassword')) != 0) {
                    $error[] = "Le password non coincidono";
                }
                # EMAIL
                if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
                    $error[] = "Email non valida";
                } else {
                    $control=User::where('email',request('email'))->first();
                    if (isset($control)) {
                        $error[] = "Esiste già un account con questa mail";
                }
            }
                    if (count($error) == 0) {
                        $default="img/icons/av01.jpg";
                        $hashed=Hash::make(request('password'));
                        $nuovo= new User;
                        $nuovo->name=request('nome');
                        $nuovo->surname=request('cognome');
                        $nuovo->email=request('email');
                        $nuovo->avatar_image=$default;
                        $nuovo->password=$hashed;
                        $nuovo->save();
                        $neoid=User::where('email',request('email'))->first();
                        Session::put('user_id',$neoid->id);
                        return redirect('chooseavatar');
                    }
                    return view('signup')->with('csrf_token',csrf_token())->with('error',$error)
                    ->with('old_nome',request('nome'))
                    ->with('old_cognome',request('cognome'))
                    ->with('old_email',request('email'));
            }
    }
}
