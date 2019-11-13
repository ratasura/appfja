@extends ('layouts.admin')
@section ('contenido')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
{{-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
    
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nueva PC</h3>
		@if (count($errors)>0)
		<div class="alert alert-danger"> 
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>

{!!Form::open(array('url'=>'computadoras','method'=>'POST', 'autocomplete'=>'off'))!!}
{!!Form::token()!!}

<div class="row">

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Tipo</label>
                        <select name="tipo" class="form-control">
                                <option value="" selected disabled hidden>Escoja un tipo</option>
                                <option value="PC">PC </option>
                                <option value="LAPTOP">LAPTOP</option>
                                
                        </select>              
                        
                </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="provincia">Nombre</label>
                        <input type="text" name="nombre" placeholder="AZUCUE..." class="form-control">										
                </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" placeholder="usuario a cargo" class="form-control">										
                </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                        <label for="ram">Cantidad en RAM</label>
                        <input type="text" name="ram" placeholder="Ram en gb" class="form-control">										
                </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                        <label for="hdd">Cantidad en HDD</label>
                        <input type="text" name="hdd" placeholder="Hdd en gb" class="form-control">										
                </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <label>Marca</label>
                        <select name="marca" class="form-control">
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
                        <input type="text" name="serie" class="form-control">										
                </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <label for="caf">Activo fijo</label>
                        <input type="text" name="caf" class="form-control">										
                </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                               <label>Monitor</label>
                               <input type="hidden" id="location_id" />
                        <input type="text" value="" name="IDMONITOR" placeholder="MONITOR" class="form-control" id="locations" />
                        </div>
                           
        </div>
        <!-- INICIO DEL MODAL -->

        <div class="modal" id="modal">
                        <div class="modal-dialog">
                                <div class="modal-content">                                
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                                <h4 class="modal-title">Monitores</h4>                                
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                                <table class="table datatable" id="information" style="width:100%">
                                                        <thead>
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Marca</th>
                                                                <th scope="col">Serie</th>
                                                                <th scope="col">Activo fijo</th>
                                                                
                                                                </tr>
                                                        </thead>
                                                        
                                                </table>
                                        </div>
                                
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                              
                                  
                                </div>
                        </div>
                </div>

        <!--FIN DEL MODAL -->
      
      
</div>  <!--DIV DEL ROW PRINCIPAL -->

{!!Form::close()!!}

@push('scripts')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script>
       

         //datatable
         $(document).ready(function() {
                $('.datatable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '{{ route('monitor/getdata') }}',
                        columns: [
                                        {data: 'id', name: 'id'},
                                        {data: 'marca', name: 'marca'},
                                        {data: 'serie', name: 'serie'},
                                        {data: 'caf', name: 'caf'},
                                ]
                });
        });
         //fin datable 
          // PARA SELECCIONAR EN EL MODAL
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
         // FIN PARA SELECCIONAR EN EL MODAL

       
    </script>
@endpush

@endsection()