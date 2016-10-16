<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CardapioItem extends Model
{
    use SoftDeletes;

    protected $table = 'cardapio_item';
    protected $primaryKey = 'id_cardapio_item';
    protected $fillable = ['id_cardapio_item', 'tx_cardapio_item', 'id_cardapio', 'created_at', 'updated_at', 'deleted_at'];

    public function cardapio()
    {
        return $this->belongsTo('App\Cardapio');
    }
}
