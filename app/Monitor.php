<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    public $timestamps = false;
    protected $table ='monitors';
    protected $primaryKey='id';

    protected $fillable = [

    	'marca',
        'serie',
    	'caf'
    ];

    protected $guarded =[
    	
    ];

    public function computador()
    {
        return $this->belongsTo('App\Computador');
    }
   

}
