<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Periferico;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PerifericoFormRequest;
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
            $perifericos=Periferico::where('tipo','SCANNER')->get();            
            return view('perifericos.index', ['perifericos' => $perifericos, "searchText" => $query]);
            // {{ dd($perifericos->get('')); }}
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function impresorasList(Request $request){

        if ($request) {
            $query=trim($request->get('searchText'));
            $perifericos=Periferico::where('tipo','IMPRESORA')->paginate(10);
            return view ('perifericos.plantillas.index', compact('perifericos'));
            //dd($request) ;
        }

    }

    public function scannersList(Request $request){

        if ($request) {
            $query=trim($request->get('searchText'));
            $perifericos=Periferico::where('tipo','SCANNER')->paginate(10);
            return view ('perifericos.plantillas.index', compact('perifericos'));
            //dd($request) ;
        }

    }

    public function telefonosList(Request $request){

        if ($request) {
            $query=trim($request->get('searchText'));
            $perifericos=Periferico::where('tipo','TELEFONO')->paginate(10);
            return view ('perifericos.plantillas.index', compact('perifericos'));
            //dd($request) ;
        }

    }

    
}
