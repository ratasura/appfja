@extends ('layouts.admin')
@section ('contenido')

<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo  Monitor</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger"> 
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    
            {!!Form::open(array('url'=>'/monitores','method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
            <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <input type="text" name="marca" class="form-control">										
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
                                        <label for="caf">Activo fijo</label>
                                        <input type="text" name="caf" class="form-control">										
                                </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                    <button class="btn button-green" type="reset" onclick="history.back()">Volver</button>
                                    {{-- <input type="button" class="btn btn-secondary" onclick="history.back()" name="volver  value="volver atrás"> --}}
                                </div>
                        </div>
                                   
            </div>
    
            
            
        
            {!!Form::close()!!}
        </div>
    </div>

@endsection()