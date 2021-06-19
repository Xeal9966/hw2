<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model{
    protected $table='recensore';
    protected $primaryKey="id_editore";

    public function rec(){
        return $this->hasMany("App\Models\Rec","editor");
    }
}
?>