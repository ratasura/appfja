<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Teclado;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\TecladoFormRequest;
use DB;

class TecladoController extends Controller
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
            $teclados=DB::table('teclados')
            ->where('caf','LIKE','%'.$query.'%')
            ->orderBy('id')
            ->paginate(10);
           return view('teclados.index', ["teclados"=>$teclados,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('teclados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecladoFormRequest $request)
    {
        $teclado =  new Teclado();
        $teclado->marca=$request->get('marca');
        $teclado->serie=$request->get('serie');
        $teclado->caf=$request->get('caf');
        $teclado->save();
        return Redirect::to('teclados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teclado = Teclado::findOrFail($id);
        return view ('teclados.edit', ["teclado" => $teclado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TecladoFormRequest $request, $id)
    {
        $teclado = Teclado::findOrFail($id);
        $teclado->marca=$request->get('marca');
        $teclado->serie=$request->get('serie');
        $teclado->caf=$request->get('caf');
        $teclado->update();
        return Redirect::to('teclados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teclado = Teclado::findOrFail($id);
        $teclado->delete();
        return Redirect::to('teclados');
    }
}
