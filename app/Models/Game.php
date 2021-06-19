<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model{
    protected $table='games';
    protected $primaryKey="id_game";

    public function game(){
        return $this->hasMany("App\Models\Cart","game");
    }
}
?>