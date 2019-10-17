<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public $timestamps = false;
    protected $table ='ubicacions';
    protected $primaryKey='id';

    protected $fillable = [

    	'provincia',
        'canton',
        'edificio',        
    	'piso',
        'unidad',
    	'tecnico'
    ];

    protected $guarded =[
    	
    ];

    public function computador()
    {
        return $this->belongsTo('App\Computador');
    }

    public function periferico()
    {
        return $this->belongsTo('App\periferico');
    }
}

