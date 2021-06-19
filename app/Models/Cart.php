<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
    protected $table='cart';
    protected $primaryKey="id_add";

    public function user(){
        return $this->belongsTo("App\Models\User","id");
    }

    public function game(){
        return $this->belongsTo("App\Models\Game","id_game");
    }

    protected $fillable=[
        'id_add', 'game', 'user_site'
    ];
}
?>