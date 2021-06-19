<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('/login','LoginController@login');
Route::post('/login','LoginController@checklogin');

Route::get('/logout','LoginController@logout');

Route::get('/signup','SignupController@signup');
Route::post('/signup','SignupController@checksignup');

Route::get('/chooseavatar','ChooseController@choose');
Route::post('/chooseavatar','ChooseController@checkchoose');

Route::get('/home','HomeController@index');
Route::get('/home/loaduser','HomeController@loaduser');
Route::get('/home/loadgames','HomeController@loadgames');
Route::get('/home/loadrecs','HomeController@loadrecs');

Route::get('game={a}','GameinfoController@loadinfoes');

Route::get('allgames','AllgameController@showall');
Route::get('allgames/loadgames','AllgameController@loadgames');

Route::get('cart','CartController@showcart');
Route::get('cart/loadcart','CartController@loadcart');
Route::get('cart/loadtot','CartController@loadtot');
Route::get('cart/add={a}','CartController@addtocart');
Route::get('cart/remove={a}','CartController@removetocart');
Route::get('cart/removeall','CartController@removeall');
Route::get('cart/loadhistory','CartController@loadhistory');
Route::get('cart/acquista','CartController@buynow');

Route::get('api/video={a}','GameinfoController@api');

/*Route::get('home',function(){
echo '<h3>Benvenuto</h3>';
$user= User::find(session("user_id"));
if(isset($user)) echo $user;
else echo "Accedi";
});*/