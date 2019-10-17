<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    public $timestamps = false;
    protected $table ='computadors';
    protected $primaryKey='id';

    protected $fillable = [

    	'tipo',
    	'nombre',
    	'responsable',
        'ram',
        'hdd',
        'marca',
        'modelo',
    	'serie',
        'caf',
        'idmonitor',
        'idteclado',
        'idmouse',
        'idubicacion'


    ];

    protected $guarded =[
    	
    ];

    public function monitor()
    {
        return $this->hasOne('App\Monitor');
    }
    public function teclado()
    {
        return $this->hasOne('App\Teclado');
    }
    public function mouse()
    {
        return $this->hasOne('App\Mouse');
    }
    public function ubicacion()
    {
        return $this->hasOne('App\Ubicacion');
    }
}
