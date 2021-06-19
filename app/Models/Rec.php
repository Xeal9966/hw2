<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rec extends Model{
    protected $table='recensione';
    protected $primaryKey="id_rec";

    public function editor(){
        return $this->belongsTo("App\Models\Editor","id_editore");
    }

    public function game(){
        return $this->belongsTo("App\Models\Game","id_game");
    }
}
?>