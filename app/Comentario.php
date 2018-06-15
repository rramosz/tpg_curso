<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
class Comentario extends Model
{
    //
    use SoftDeletes;
    protected $table="comentarios";
    protected $fillable = [
        'nombre', 'descripcion'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' );
    }
    //protected $primaryKey = 'comentario_id';
    
}
