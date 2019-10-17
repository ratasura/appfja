@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Ubicaciones <a href="/ubicaciones/create"><button class="btn btn-success" >Nuevo</button></a> </h3>
        @include('ubicaciones.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Cantón</th>
                        <th>Edificio</th>
                        <th>Piso</th>
                        <th>Unidad</th>
                        <th>Técnico Asignado</th>
                    </thead>
                    @foreach ($ubicaciones as $ub)
                        <tr>
                        <td>{{$ub->canton}}</td>
                        <td>{{$ub->edificio}}</td>
                        <td>{{$ub->piso}}</td>
                        <td>{{$ub->unidad}}</td>
                        <td>{{$ub->tecnico}}</td>
                        <td>
                            <a href="{{URL::action('UbicacionController@edit',$ub->id)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$ub->id}}" data-toggle="modal"><button class="btn btn-danger" disabled="true">Eliminar</button></a>
                        </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{$ubicaciones->render()}}
    </div>

</div>

@endsection