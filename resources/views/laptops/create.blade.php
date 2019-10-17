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

{!!Form::open(array('url'=>'/ventas/venta','method'=>'POST', 'autocomplete'=>'off'))!!}
{!!Form::token()!!}

<div class="row">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
				<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control selectpicker" data-live-search="true">
                            <option value="PC">PC</option>
                            <option value="LAPTOP">LAPTOP</option>
						</select>										
				</div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                    <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control">										
                    </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                        <div class="form-group">
                                <label for="responsable">Funcionario Responsable</label>
                                <input type="text" name="responsable" class="form-control">										
                        </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                    <div class="form-group">
                            <label for="ram">GB en Ram</label>
                            <input type="text" name="ram" class="form-control">										
                    </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                    <div class="form-group">
                            <label for="hdd">GB en Disco</label>
                            <input type="text" name="hdd" class="form-control">										
                    </div>
            </div>

</div>
<div class="row">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
				<div class="form-group">
						<label for="marca">Marca</label>
						<select name="marca" id="tipo" class="form-control selectpicker" data-live-search="true">
                            <option value="DELL">DELL</option>
                            <option value="HP">HP</option>
                            <option value="ACER">ACER</option>
                            <option value="ULTRATECH">ULTRATECH</option>
                            <option value="ARI">ARI</option>
                            <option value="XTRATECH">XTRATECH</option>
                            <option value="ADIKTO">ADIKTO</option>
                            <option value="HASSE">HASSE</option>
						</select>										
				</div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
				<div class="form-group">
						<label for="modelo">Modelo</label>
						<select name="modelo" id="modelo" class="form-control selectpicker" data-live-search="true">
                            <option value="OPTIPLEX 9010">OPTIPLEX 9010</option>
                            <option value="OPTIPLEX 990">OPTIPLEX 990</option>
                            <option value="DC7800">DC7800</option>
                            <option value="ASPIRE M3970">ASPIRE M3970</option>
                            <option value="6000 PRO">6000 PRO</option>
                            <option value="ULTRATECH">ULTRATECH</option>
                            <option value="8100 ELITE">8100 ELITE</option>
                            <option value="6000">6000</option>
                            <option value="KALLPA-AGP64F1">KALLPA-AGP64F1</option>
                            <option value="DC7900">DC7900</option>
                            <option value="OPTIPLEX 790">OPTIPLEX 790</option>
                            <option value="DC7600">DC7600</option>
                            <option value="XTRATECH">XTRATECH</option>
                            <option value="ADIKTO">ADIKTO</option>
                            <option value="TOUCH">TOUCH</option>
                            <option value="LATITUDE E 6430">LATITUDE E 6430</option>
                            <option value="ASPIRE 4752">ASPIRE 4752</option>
                            <option value="LATITUDE E 6420">LATITUDE E 6420</option>
                            <option value="LATITUDE E 6440">LATITUDE E 6440</option>
                            <option value="PROBOOK 640 ">PROBOOK 640 </option>
                            <option value="6730B">6730B</option>
                            <option value="ELITEBOOK 8440P">ELITEBOOK 8440P</option>
						</select>										
				</div>
        </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                    <div class="form-group">
                            <label for="serie">Serie</label>
                            <input type="text" name="serie" class="form-control">										
                    </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                        <div class="form-group">
                                <label for="caf">Activo Fijo</label>
                                <input type="text" name="caf" class="form-control">										
                        </div>
            </div>
            
</div>

<div class="row">        
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3>Periféricos</h3>
     </div>     
</div>


        {{-- <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                <div class="form-group">
                        <label for="idmonitor">Monitor</label>
                        <input type="text" name="caf" class="form-control" disabled>	
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#create">Buscar</a>									
                </div>
        </div>             --}}
        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Monitor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Teclado</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Mouse</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <label for="">Codigo de activo fijo</label>
                    <input type="text">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div> --}}
              <div class="row">
              
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                        <div class="form-group">
                                <label for="idmonitor">Monitor</label>
                                <input type="text" name="caf" class="form-control" disabled>	
                                
                        </div>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Buscar</a>	  
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                        <div class="form-group">
                                <label for="idmonitor">Monitor</label>
                                <input type="text" name="caf" class="form-control" disabled>	
                                
                        </div>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Buscar</a>	  
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                        <div class="form-group">
                                <label for="idmonitor">Monitor</label>
                                <input type="text" name="caf" class="form-control" disabled>	
                                
                        </div>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Buscar</a>	  
                </div>
               								                

               @include('computadoras.modal_monitor')
              </div>


{!!Form::close()!!}
@endsection()