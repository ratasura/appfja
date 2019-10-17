<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
    public $timestamps = false;
    protected $table ='teclados';
    protected $primaryKey='id';

    protected $fillable = [

    	'marca',
        'serie',
    	'caf'
    ];

    public function computador()
    {
        return $this->belongsTo('App\Computador');
    }
}
