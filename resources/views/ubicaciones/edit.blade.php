@extends ('layouts.admin')
@section ('contenido')

<div class="row">

    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <h3>Editar Ubicación {{$ubicacion->edificio." ".$ubicacion->piso." ".$ubicacion->unidad  }}</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
                @endforeach
                
            </ul>
        </div>
        @endif
        {!! Form::model($ubicacion, ['method'=>'PATCH', 'route' =>['ubicaciones.update', $ubicacion->id]])!!}
        {{Form::token()}}
        
            <div class="row">
                                       
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Cantón</label>
                                    <select name="canton" class="form-control" >
                                    <option value="{{$ubicacion->canton}}" >{{$ubicacion->canton}}</option>
                                            <option value="CUENCA">Cuenca</option>
                                            <option value="GUALACEO">Gualaceo</option>
                                            <option value="PAUTE">Paute</option>
                                            <option value="SIGSIG">Sigsig</option>
                                            <option value="GIRON">Giron</option>
                                            <option value="SANTA ISABEL">Santa Isabel</option>
                                            <option value="OÑA">Oña</option>
                                            <option value="NABON">Nabón</option>
                                            <option value="PONCE ENRIQUEZ">Ponce</option>
                                                                    
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                    <label for="serie_comprobante">Edificio</label>
                                    <select name="edificio" class="form-control">
                                            <option value="{{$ubicacion->edificio}}">{{$ubicacion->edificio}}</option>
                                            <option value="COMPLEJO JUDICIAL BLOQUE A">COMPLEJO JUDICIAL BLOQUE A</option>
                                            <option value="COMPLEJO JUDICIAL BLOQUE B">COMPLEJO JUDICIAL BLOQUE B</option>
                                            <option value="CORTE PROVINCIAL DEL AZUAY">CORTE PROVINCIAL DEL AZUAY</option>
                                            <option value="EDIFICIO JUDICIAL DE GUALACEO">EDIFICIO JUDICIAL DE GUALACEO</option>
                                            <option value="EDIFICIO JUDICIAL PAUTE">EDIFICIO JUDICIAL PAUTE</option>
                                            <option value="CASA JUDICIAL">CASA JUDICIAL</option>                                
                                                                    
                                    </select>								
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                    <label for="piso">Piso</label>
                                    <select name="piso" class="form-control">
                                            <option value="$ubicacion->piso">{{$ubicacion->piso}}</option>
                                            <option value="PB">PB</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>                                
                                                                    
                                    </select>
                            </div>
                        </div>
            
            </div>
            <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Unidad</label>
                                    <select name="unidad"  class="form-control">
                                            <option value="{{$ubicacion->unidad}}">{{$ubicacion->unidad}}</option>
                                            <option value="ACTIVOS FIJOS">ACTIVOS FIJOS</option>
                                            <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                                            <option value="ARCHIVO ALTO ">ARCHIVO ALTO </option>
                                            <option value="ARCHIVO BAJO ">ARCHIVO BAJO </option>
                                            <option value="CITACIONES">CITACIONES</option>
                                            <option value="CIVIL">CIVIL</option>
                                            <option value="COACTIVAS">COACTIVAS</option>
                                            <option value="CONTENCIOSO ADMINISTRATIVO">CONTENCIOSO ADMINISTRATIVO </option>
                                            <option value="CONTROL DISCIPLINARIO">CONTROL DISCIPLINARIO </option>
                                            <option value="COORDINACION SORTEOS">COORDINACION SORTEOS</option> 
                                            <option value="COPIAS CERTIFICADAS">COPIAS CERTIFICADAS</option> 
                                            <option value="COUNTER DE  INFORMACION">COUNTER DE  INFORMACION</option>  
                                            <option value=" DEPARTAMENTO MEDICO"> DEPARTAMENTO MEDICO</option> 
                                            <option value="DIGITALIZACION">DIGITALIZACION</option>   
                                            <option value="DIRECCION PROVINCIAL">DIRECCION PROVINCIAL</option>  
                                            <option value="ENTREGA COPIAS CERTIFICADAS">ENTREGA COPIAS CERTIFICADAS</option> 
                                            <option value="ESCUELA JUDICIAL">ESCUELA JUDICIAL</option>  
                                            <option value="FAMILIA">FAMILIA</option> 
                                            <option value="FINANCIERO">FINANCIERO</option>
                                            <option value="FLAGRANCIAS">FLAGRANCIAS</option>
                                            <option value="FLAGRANCIAS VIOLENCIA">FLAGRANCIAS VIOLENCIA</option>
                                            <option value="GESTION PROCESAL">GESTION PROCESAL</option>
                                            <option value="INFORMACION">INFORMACION</option>
                                            <option value="INFORMATICA">INFORMATICA</option>
                                            <option value="JURIDICO">JURIDICO</option>
                                            <option value="JUSTICIA DE PAZ">JUSTICIA DE PAZ</option>
                                            <option value="LABORAL">LABORAL</option>
                                            <option value="MEDIACION">MEDIACION</option>
                                            <option value="MULTICOMPETENTE">MULTICOMPETENTE</option>
                                            <option value="OFICINA TÉCNICA DE FAMILIA">OFICINA TÉCNICA DE FAMILIA</option>
                                            <option value="OFICINA TÉCNICA DE VIOLENCIA ">OFICINA TÉCNICA DE VIOLENCIA </option>
                                            <option value="PAGADURIA">PAGADURIA</option>
                                            <option value="PRACTICAS PREPROFESIONALES">PRACTICAS PREPROFESIONALES</option>
                                            <option value="PRESIDENCIA">PRESIDENCIA</option>
                                            <option value="SALA CIVIL">SALA CIVIL</option>
                                            <option value=" SALA DE AUDIENCIAS"> SALA DE AUDIENCIAS</option>
                                            <option value="SALA DE FAMILIA">SALA DE FAMILIA</option>
                                            <option value="SALA LABORAL">SALA LABORAL</option>
                                            <option value="SALA LÚDICA">SALA LÚDICA</option>
                                            <option value="SALA PENAL">SALA PENAL</option>
                                            <option value="SALAS DE AUDIENCIA CORTE PROVINCIAL">SALAS DE AUDIENCIA CORTE PROVINCIAL</option>
                                            <option value="SORTEOS">SORTEOS</option>
                                            <option value="TALENTO HUMANO">TALENTO HUMANO</option>
                                            <option value="TRIBUNAL DISTRITAL CONTENCIOSO TRIBUTARIO">TRIBUNAL DISTRITAL CONTENCIOSO TRIBUTARIO</option>
                                            <option value="TRIBUNALES">TRIBUNALES</option>
                                            <option value="UNIDAD JUDICIAL DE GUALACEO">UNIDAD JUDICIAL DE GUALACEO</option>
                                            <option value="UNIDAD JUDICIAL DE NABON">UNIDAD JUDICIAL DE NABON</option>
                                            <option value="UNIDAD JUDICIAL DE OÑA">UNIDAD JUDICIAL DE OÑA</option>
                                            <option value="UNIDAD JUDICIAL DE PAUTE">UNIDAD JUDICIAL DE PAUTE</option>
                                            <option value="UNIDAD JUDICIAL DE PONCE ENRIQUEZ">UNIDAD JUDICIAL DE PONCE ENRIQUEZ</option>
                                            <option value="UNIDAD JUDICIAL GIRON">UNIDAD JUDICIAL GIRON</option>
                                            <option value="UNIDAD JUDICIAL PENAL">UNIDAD JUDICIAL PENAL</option>
                                            <option value="UNIDAD JUDICIAL STA. ISABEL">UNIDAD JUDICIAL STA. ISABEL</option>
                                            <option value="VENTANILLA CONSULTA DE CAUSAS">VENTANILLA CONSULTA DE CAUSAS</option>
                                            <option value="VENTANILLA CORTE PROVINCIAL">VENTANILLA CORTE PROVINCIAL</option>
                                            <option value="VIF">VIF</option>
                                            <option value="VIOLENCIA">VIOLENCIA</option>

                                            
                                    </select>
                            </div>
                    </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label>Técnico Asignado</label>
                                        <select name="tecnico" class="form-control">
                                                <option value="{{$ubicacion->tecnico}}" >{{$ubicacion->tecnico}}</option>
                                                <option value="ln">Lino Naranjo</option>
                                                <option value="as">Arturo Sacoto</option>
                                                <option value="rl">René Llivicura</option>
                                                <option value="jl">Juan Landi</option>
                                                <option value="lv">Luis Valdivieso</option>
                                                                                                                        
                                        </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                            <label for="provincia">Provincia</label>
                                            <input type="text" name="provincia" value="Azuay" class="form-control">										
                                    </div>
                                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                    <div class="form-group">
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        {{-- <button class="btn btn-danger" type="reset">Cancelar</button> --}}
                        <button class="btn button-green" type="reset" onclick="history.back()">Volver</button>
                    </div>
            </div>

        {!! Form::close() !!}
    </div>

</div>


@endsection