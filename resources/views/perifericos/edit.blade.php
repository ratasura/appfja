@extends ('layouts.admin')
@section ('contenido')

<div class="row">

    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Editar periferico</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
                @endforeach
                
            </ul>
        </div>
        @endif
        {!!Form::model($periferico,['method'=>'PATCH','route'=>['perifericos.update', $periferico->id]])!!}
        {!!Form::token()!!}
        
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Tipo</label>
                        <select name="tipo"  class="form-control">
                                <option value="{{$periferico->tipo}}">{{$periferico->tipo}}</option>
                                <option value="IMPRESORA">IMPRESORA </option>
                                <option value="TELÉFONO">TELÉFONO</option>
                                <option value="SCANNER">SCANNER</option>
                        </select>              
                        
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="provincia">Nombre</label>
                        <input type="text" value="{{$periferico->nombre}}" name="nombre" placeholder="AZUCUE..." class="form-control">										
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" value="{{$periferico->responsable}}" placeholder="usuario a cargo" class="form-control">										
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Marca</label>
                        <select name="marca"  class="form-control">
                            @foreach ($marcas as $mar)
                                <option value="{{$mar->marca}}">{{$mar->marca}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Modelo</label>
                        <select name="modelo" class="form-control">
                            @foreach ($modelos as $mod)
                                <option value="{{$mod->modelo}}">{{$mod->modelo}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="serie">Número de serie</label>
                <input type="text" value="{{$periferico->serie}}" name="serie" class="form-control">										
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="caf">Activo fijo</label>
                        <input type="text" value="{{$periferico->caf}}" name="caf" class="form-control">										
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Subtipo</label>
                        <select name="subtipo" class="form-control">
                            @foreach ($subtipos as $sub)
                                <option value="{{$sub->subtipo}}">{{$sub->subtipo}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Tipo Conexión (Solo impresoras)</label>
                        <select name="conexion" class="form-control">
                                <option value="" selected disabled hidden>Escoja un tipo</option>
                                <option value="USB">USB </option>
                                <option value="RED">RED</option>
                        </select>              
                        
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Tipo Impresión (Solo impresoras)</label>
                        <select name="color" class="form-control">
                                <option value="" selected disabled hidden>Escoja un tipo</option>
                                <option value="COLOR">COLOR </option>
                                <option value="BLANCO Y NEGRO">BLANCO Y NEGRO</option>
                        </select>              
                        
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                       <label>Ubicacion</label>
                       <input type="hidden" id="location_id" />
                <input type="text" value="{{$ubi->unidad}}" name="idubicacion" placeholder="aqui" class="form-control" id="locations" />
                </div>
                   
           </div>


                    <!-- INICIO DEL MODAL -->
                    <div class="modal" id="modal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                      
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Ubicaciones</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                      
                            <!-- Modal body -->
                            <div class="modal-body">
                             <table class="table" id="information">
                        <thead>
                          <tr>
                            <th scope="col">Edificio</th>
                            <th scope="col">ID</th>
                            <th scope="col">Piso</th>
                            <th scope="col">Unidad</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ubicaciones as $ub)
                            <tr>
                                <td>{{$ub->edificio}}</td>
                                <td>{{$ub->id}}</td>
                                <td>{{$ub->piso}}</td>
                                <td>{{$ub->unidad}}</td>
                                  
                                
                            </tr>
                           
                            @endforeach
                         
                        </tbody>
                      </table>
                            </div>
                      
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                      
                          </div>
                        </div>
                      </div>
                <!-- FIN DEL MODAL -->
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                    <div class="form-group">
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <button class="btn btn-primary" type="submit">Editar</button>
                        <button class="btn button-green" type="reset" onclick="history.back()">Volver</button>
                    </div>
            </div>

        {!! Form::close() !!}
    </div>

</div>

@push('scripts')

    <script>

        $('#locations').on('click', function(e){
            console.log(e.currentTarget)
            $('#modal').modal();
        });

        $("#information>tbody>tr").on('click', function(e){
            console.log($(e.currentTarget));
        $("#location_id").val(e.currentTarget.cells[0].innerHTML);
        $("#locations").val( e.currentTarget.cells[1].innerHTML)
        $('#modal').modal('hide');
            
        })
    </script>
@endpush


@endsection