<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mouse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\MouseFormRequest;
use DB;

class MouseController extends Controller
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
            $mouses = DB::table('mouses')
            ->where('caf','LIKE','%'.$query.'%')
            ->orderBy('id')
            ->paginate(10);
           return view('mouses.index', ["mouses"=>$mouses,"searchText"=>$query]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mouses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MouseFormRequest $request)
    {
        $mouse =  new Mouse();
        $mouse->marca=$request->get('marca');
        $mouse->serie=$request->get('serie');
        $mouse->caf=$request->get('caf');
        $mouse->save();
        return Redirect::to('mouses');

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
        $mouse = Mouse::findOrFail($id);
        return view ('mouses.edit', compact('mouse') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MouseFormRequest $request, $id)
    {
        $mouse = Mouse::findOrFail($id);
        $mouse->marca=$request->get('marca');
        $mouse->serie=$request->get('serie');
        $mouse->caf=$request->get('caf');
        $mouse->update();
        return Redirect::to('mouses');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mouse = Mouse::findOrFail($id);
        $mouse->delete();
        return Redirect::to('mouses');
    }
}
