<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table='users';

    protected $fillable=[
        'id', 'email', 'password', 'name', 'avatar_image', 'surname','updated_at', 'created_at'
    ];

    protected $hidden=[
        'id','password'
    ];

    public function cart(){
        return $this->hasMany("App\Models\Cart","user_site");
    }
}
?>