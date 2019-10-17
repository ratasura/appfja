@extends ('layouts.admin')
@section ('contenido')

<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Mouse <a href="/mouses/create"><button class="btn btn-success">Nuevo</button></a> </h3>
            @include('mouses.search')
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
                        @foreach ($mouses as $mo)
                        <tr>
                            <td>{{$mo->marca}}</td>
                            <td>{{$mo->serie}}</td>
                            <td>{{$mo->caf}}</td>
                                                           
                            <td>
                                <a href="{{URL::action('MouseController@edit',$mo->id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$mo->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('mouses.modal')
                        @endforeach
                    </table>
                </div>
                {{$mouses->render()}}
            </div>
        </div>
        

@endsection()