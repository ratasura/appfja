<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    public $timestamps = false;
    protected $table ='perifericos';
    protected $primaryKey='id';

    protected $fillable = [

    	'tipo',
        'nombre',
        'responsable',
        'marca',
        'modelo',
        'serie',
        'caf',
        'subtipo',
        'conexion',
        'color',
        'idubicacion'
    ];

    protected $guarded =[

        'tipo',
    	'nombre',
    	'responsable',
        'ram',
        'hdd',
        'marca',
        'modelo',
    	'serie',
        'caf',
        'subtipo',
        'conexion',
        'color',
        'idubicacion'
    	
    ];

    public function ubicacion()
    {
        return $this->hasOne('App\Ubicacion');
    }
}
