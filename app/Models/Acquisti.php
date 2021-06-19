<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Acquisti extends Model{
    protected $table='acquisti';
    protected $primaryKey="id_buy";

    public function user(){
        return $this->belongsTo("App\Models\User","id");
    }

    public function game(){
        return $this->belongsTo("App\Models\Game","id_game");
    }

    protected $fillable=[
        'id_buy', 'game', 'buyer','updated_at', 'created_at'
    ];
}
?>