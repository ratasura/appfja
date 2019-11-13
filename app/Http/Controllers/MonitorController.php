<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Monitor;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\MonitorFormRequest;
use DB;


class MonitorController extends Controller
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
            $monitores=DB::table('monitors')
            ->where('caf','LIKE','%'.$query.'%')
            ->orderBy('id')
            ->paginate(10);
           return view('monitores.index', ["monitores"=>$monitores,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monitores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonitorFormRequest $request)
    {
        $monitor = new Monitor();
        $monitor->marca=$request->get('marca');
        $monitor->serie=$request->get('serie');
        $monitor->caf=$request->get('caf');
        $monitor->save();
        return Redirect::to('monitores');
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
        $monitor = Monitor::findOrFail($id);
        return view ("monitores.edit", ["monitor" => $monitor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MonitorFormRequest $request, $id)
    {
        $monitor = Monitor::findOrFail($id);
        $monitor->marca=$request->get('marca');
        $monitor->serie=$request->get('serie');
        $monitor->caf=$request->get('caf');
        $monitor->update();
        return Redirect::to('monitores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitor = Monitor::findOrFail($id);
        $monitor->delete();
        return Redirect::to('monitores');
    }

    public function listarMonitores()
    {
      return \DataTables::of(Monitor::query())->make(true);
    }
}
