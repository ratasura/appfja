<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

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


    // public function scopeSelectMonitor($query)
    // {
    //     return $query->where('caf',$query);
    // }
    // public static function BuscaMon($query){
    //     return static::where('caf', $query);
    // }

}
