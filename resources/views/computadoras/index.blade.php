@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Equipos <a href="/computadoras/create"><button class="btn btn-success">Nuevo</button></a> </h3>
        @include('computadoras.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Responsable</th>
                        <th>Activo Fijo</th>
                        <th>Ubicacion</th>

                    </thead>
                    @foreach ($computadoras as $com)
                        <tr>
                        <td>{{$com->tipo}}</td>
                        <td>{{$com->nombre}}</td>
                        <td>{{$com->responsable}}</td>
                        <td>{{$com->caf}}</td>
                        <td>{{$com->idubicacion}}</td>
                        <td>
                            <a href="{{URL::action('ComputadorController@edit',$com->id)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$com->id}}" data-toggle="modal"><button class="btn btn-danger" disabled="true">Eliminar</button></a>
                        </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{$computadoras->render()}}
    </div>

</div>

@endsection