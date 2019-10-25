<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Periferico;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PerifericoFormRequest;
use App\Ubicacion;
use DB;

class PerifericoController extends Controller
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
             $perifericos=Periferico::where('caf','LIKE','%'.$query.'%')->paginate();           
            return view('perifericos.index', ['perifericos' => $perifericos, "searchText" => $query]);
            // {{ dd($perifericos->get('')); }}
            // $perifericos=Periferico::where('tipo','SCANNER')->get();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = DB::table('perifericos')
        ->distinct()
        ->get('marca');
        $modelos = DB::table('perifericos')
        ->distinct()
        ->get('modelo');
        $subtipos = DB::table('perifericos')
        ->distinct()
        ->get('subtipo');
        $ubicaciones= Ubicacion::all();
        //dd($modelos);
        return view('perifericos.create', compact('modelos','marcas','subtipos', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerifericoFormRequest $request)
    {
        //dd($request);
        $periferico = new Periferico();
        $periferico->tipo=$request->get('tipo');
        $periferico->nombre=$request->get('nombre');
        $periferico->responsable=$request->get('responsable');
        $periferico->marca=$request->get('marca');
        $periferico->modelo=$request->get('modelo');
        $periferico->serie=$request->get('serie');
        $periferico->caf=$request->get('caf');
        $periferico->subtipo=$request->get('subtipo');
        $periferico->conexion=$request->get('conexion');
        $periferico->color=$request->get('color');
        $periferico->idubicacion=$request->get('idubicacion');
        $periferico->save();
        return Redirect::to('perifericos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = DB::table('perifericos')
        ->distinct()
        ->get('marca');
        $modelos = DB::table('perifericos')
        ->distinct()
        ->get('modelo');
        $subtipos = DB::table('perifericos')
        ->distinct()
        ->get('subtipo');
        $ubicaciones= Ubicacion::all();
        $periferico = Periferico::findOrFail($id);
        $ubi = Ubicacion::findOrFail($periferico->idubicacion);
        //dd($ub);
        return view ('perifericos.edit', compact('periferico','marcas','modelos','subtipos','ubicaciones','ubi'));
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

        //dd($request);
        $periferico =  Periferico::findOrFail($id);
        $periferico->tipo=$request->get('tipo');
        $periferico->nombre=$request->get('nombre');
        $periferico->responsable=$request->get('responsable');
        $periferico->marca=$request->get('marca');
        $periferico->modelo=$request->get('modelo');
        $periferico->serie=$request->get('serie');
        $periferico->caf=$request->get('caf');
        $periferico->subtipo=$request->get('subtipo');
        $periferico->conexion=$request->get('conexion');
        $periferico->color=$request->get('color');
        $periferico->idubicacion=$request->get('idubicacion');
        //dd($periferico);
        $periferico->update();
        return Redirect::to('perifericos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periferico = Periferico::findOrFail($id);
        $periferico->delete();
        return Redirect::to('perifericos');

    }

    // public function impresorasList(Request $request){

    //     if ($request) {
    //         $query=trim($request->get('searchText'));
    //         $perifericos=Periferico::where('tipo','IMPRESORA')->paginate(10);
    //         return view ('perifericos.plantillas.index', compact('perifericos'));
    //         //dd($request) ;
    //     }

    // }

    // public function scannersList(Request $request){

    //     if ($request) {
    //         $query=trim($request->get('searchText'));
    //         $perifericos=Periferico::where('tipo','SCANNER')->paginate(10);
    //         return view ('perifericos.plantillas.index', compact('perifericos'));
    //         //dd($request) ;
    //     }

    // }

    // public function telefonosList(Request $request){

    //     if ($request) {
    //         $query=trim($request->get('searchText'));
    //         $perifericos=Periferico::where('tipo','TELEFONO')->paginate(10);
    //         return view ('perifericos.plantillas.index', compact('perifericos'));
    //         //dd($request) ;
    //     }

    // }

    public function obtieneUbicacion()
    {

    }

    
}
