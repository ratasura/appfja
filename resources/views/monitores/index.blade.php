@extends ('layouts.admin')
@section ('contenido')

<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Monitores <a href="/monitores/create"><button class="btn btn-success">Nuevo</button></a> </h3>
            @include('monitores.search')
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Marca</th>
                            <th>Serie</th>
                            <th>Activo Fijo</th>
                            <th>Opciones</th>
                        </thead>
                        @foreach ($monitores as $mon)
                        <tr>
                            <td>{{$mon->marca}}</td>
                            <td>{{$mon->serie}}</td>
                            <td>{{$mon->caf}}</td>
                                                           
                            <td>
                                <a href="{{URL::action('MonitorController@edit',$mon->id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$mon->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('monitores.modal')
                        @endforeach
                    </table>
                </div>
                {{$monitores->render()}}
            </div>
        </div>
        

@endsection()