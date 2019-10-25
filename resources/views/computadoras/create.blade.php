@extends ('layouts.admin')
@section ('contenido')
    
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



</div>

{!!Form::close()!!}
@endsection()