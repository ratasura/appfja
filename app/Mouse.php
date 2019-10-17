<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    public $timestamps = false;
    protected $table ='mouses';
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
