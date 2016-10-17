<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cardapio extends Model
{
    use SoftDeletes;

    protected $table = 'cardapio';
    protected $primaryKey = 'id_cardapio';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id_cardapio', 'created_at', 'updated_at', 'deleted_at'];

    public function cardapioItem()
    {
        return $this->hasMany('App\CardapioItem');
    }
}
