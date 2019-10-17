<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Ubicacion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UbicacionFormRequest;
use DB;


class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query=trim($request->get('searchText'));
            $ubicaciones = DB::table('ubicacions')->where('unidad','LIKE','%'.$query.'%')
            ->orwhere('tecnico','LIKE','%'.$query.'%') 
            ->orwhere('edificio','LIKE','%'.$query.'%')
            ->orderby('id','desc')
            ->paginate(10);
            return view ('ubicaciones.index', [ "ubicaciones" => $ubicaciones , "searchText" => $query]);

        }
        
        //$ubicaciones = \App\Ubicacion::all();
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ubicaciones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UbicacionFormRequest $request)
    {
        $ubicacion = new Ubicacion();
       
        $ubicacion->canton=$request->get('canton');
        $ubicacion->edificio=$request->get('edificio');
        $ubicacion->piso=$request->get('piso');
        $ubicacion->unidad=$request->get('unidad');
        $ubicacion->tecnico=$request->get('tecnico');
        $ubicacion->provincia=$request->get('provincia');
        $ubicacion->save();

        //dd($request);
        return Redirect::to('/ubicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ("ubicaciones.show", ["ubicacion" =>Ubicacion::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ("ubicaciones.edit", ["ubicacion" =>Ubicacion::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->provincia = $request->get('provincia');
        $ubicacion->canton=$request->get('canton');
        $ubicacion->edificio=$request->get('edificio');
        $ubicacion->piso=$request->get('piso');
        $ubicacion->unidad=$request->get('unidad');
        $ubicacion->tecnico=$request->get('tecnico');
        // $data = $request->all();
        // dd($data);
        $ubicacion->update();
        return Redirect::to('/ubicaciones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->delete();
        return Redirect::to('/ubicaciones');
    }
}
