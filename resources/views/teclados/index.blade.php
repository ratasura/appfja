@extends ('layouts.admin')
@section ('contenido')

<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Teclados <a href="/teclados/create"><button class="btn btn-success">Nuevo</button></a> </h3>
            @include('teclados.search')
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
                        @foreach ($teclados as $tec)
                        <tr>
                            <td>{{$tec->marca}}</td>
                            <td>{{$tec->serie}}</td>
                            <td>{{$tec->caf}}</td>
                                                           
                            <td>
                                <a href="{{URL::action('TecladoController@edit',$tec->id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$tec->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('teclados.modal')
                        @endforeach
                    </table>
                </div>
                {{$teclados->render()}}
            </div>
        </div>
        

@endsection()