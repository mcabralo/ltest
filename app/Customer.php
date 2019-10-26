<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /* Usando a tag ::create($data) e passando um campo validado,
    é necessário garantir que os campos que estão sendo passados
    são validos pelo usuário. Inicialmente usa-se o:
    protected $fillable = [];
    aonde o array recebe os campos. Agora, considerando que passamos a
    validação no controller, podemos retirar essa proteção, pq o campo
    já será validado em outro ponto, usamos então o:
    protected $guarded[];
    retornando um array vazio, ou seja, qualquer coisa pode ser inserida*/

    protected $guarded = [];

    public function scopeActive($query){
        /* scope{variável}, modo de escrita */
        return $query->where('active', 1);
    }

    public function scopeInactive($query){
        return $query->where('active', 0);
    }
}
