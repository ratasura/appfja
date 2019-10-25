@extends ('layouts.admin')
@section ('contenido')

<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Perifericos <a href="/perifericos/create"><button class="btn btn-success">Nuevo</button></a> </h3>
            @include('perifericos.search')
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Tipo</th>
                            <th>Responsable</th>
							<th>Modelo</th>
							<th>Activo fijo</th>
                            <th>Opciones</th>
                        </thead>
                        @foreach ($perifericos as $per)
                        <tr>
                            <td>{{$per->tipo}}</td>
                            <td>{{$per->responsable}}</td>
							<td>{{$per->modelo}}</td>
							<td>{{$per->caf}}</td>
                                                           
                            <td>
                                <a href="{{URL::action('PerifericoController@edit',$per->id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('perifericos.modal')
                        @endforeach
                    </table>
                </div>
                {{$perifericos->render()}}
            </div>
        </div>
        

@endsection()