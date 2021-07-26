@extends('adminlte::page')
<head>
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registration Form</title>
</head>
<body>
   
    @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="/css/registro.css">
    @endsection
    @section('content_header')
    <div class="container" id="registration-form">
        
        <div class="image"></div>
        <div class="frm">
            <h1>Registro de Animales Inactivos</h1>
            <form action="{{route('inactivos.fichaAnimales.update', $animal->id)}}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                <div  class="col-md-6">
                    <label for="" class="form-label">Código Animal:</label>
                    <input type="text" class="form-control" id="codigoAnimal" name="codigo_animal" value="{{$animal->animalCode}}" disabled=disabled >
                </div>
                <div  class="col-md-6">
                    <label for="">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_n" name="fecha_nacimiento"  value="{{$animal->date}}" disabled=disabled >
                </div>
                <div  class="col-md-6">
                    <label for="">Raza:</label>
                    <select class="form-control" id="razas" name="raza"  value="{{$animal->race_id}}" disabled=disabled >
                            <option selected></option>
                        @foreach ( $raza as $i )   
                            <option value="{{$i->id}}" @if($animal->race_id == $i->id ) selected @endif>{{$i->race_d}}</option>
                        @endforeach
                    </select>

                </div> 
                <div  class="col-md-6">
                    <label for="">Sexo:</label>
                    <select class="form-control" id="inputPassword4" name="sexo" value="{{$animal->sex}}" disabled=disabled>
                        <option selected></option>
                        <option value="MACHO"   @if($animal->sex == "MACHO" ) selected @endif>MACHO</option>
                        <option value="HEMBRA"   @if($animal->sex == "HEMBRA" ) selected @endif>HEMBRA</option>
                  </select>
                </div> 
                <div  class="col-md-6">
                    <label for="">Etapa:</label>
                    <select class="form-control" id="inputPassword4" name="etapa"  value="{{$animal->stage}}" disabled=disabled>
                        <option selected></option>
                        <option value="VACA"   @if($animal->stage == "VACA" ) selected @endif>VACA</option>
                        <option value="TORO"   @if($animal->stage == "TORO" ) selected @endif>TORO</option>
                        <option value="TERNERO"   @if($animal->stage == "TERNERO" ) selected @endif>TERNERO</option>
                        <option value="VAQUILLA"   @if($animal->stage == "VAQUILLA" ) selected @endif>VAQUILLA</option>
                        <option value="NOVILLO"   @if($animal->stage == "NOVILLO" ) selected @endif>NOVILLO</option>
                  </select>
                </div>
                <div  class="col-md-6">
                    <label for="">Origen:</label>
                    <select class="form-control" id="inputPassword4" name="origen" value="{{$animal->source}}" disabled=disabled>
                        <option selected></option>
                        <option value="NACIDO"   @if($animal->source == "NACIDO" ) selected @endif>NACIDO</option>
                        <option value="COMPRADO"   @if($animal->source == "COMPRADO" ) selected @endif>COMPRADO</option>
                  </select>
                </div>
                <div  class="col-md-6">
                    <label for="">Edad-Meses:</label>
                    <input type="int" class="form-control" id="proveedor" name="edad" value="{{$animal->age_month}}" disabled=disabled>
                </div>
                <div  class="col-md-6">
                    <label for="">Estado de Salud:</label>
                    <select class="form-control" id="inputPassword4" name="estado_de_salud" value="{{$animal->health_condition}}" disabled=disabled>
                        <option selected></option>
                        <option value="SANO"   @if($animal->health_condition == "SANO" ) selected @endif>SANO</option>
                        <option value="ENFERMO"   @if($animal->health_condition == "ENFERMO" ) selected @endif>ENFERMO</option>
                  </select>
                </div>
                <div  class="col-md-6">
                    <label for="">Embarazo:</label>
                    <select class="form-control" id="inputPassword4" name="estado_de_gestacion" value="{{$animal->gestation_state}}" disabled=disabled>
                        <option selected></option>
                        <option value="SI"  @if($animal->gestation_state == "SI" ) selected @endif>SI</option>
                        <option value="NO"  @if($animal->gestation_state == "NO" ) selected @endif>NO</option>
                  </select>
                </div>

                
                <div  class="col-md-6">
                    <label for="">Ubicación:</label>
                    <select class="form-control" id="" name="localizacion"   value="{{$animal->location_id}}" disabled=disabled>
                            <option></option>
                        @foreach ($ubicacion as $i )   
                            <option value="{{$i->id}}" @if($animal->location_id == $i->id ) selected @endif >{{$i->location_d}}</option>
                        @endforeach
                    </select>

                </div> 
                <div class="col-md-6">
                    <label for="">Concebedido:</label>
                    <select class="form-control" id="inputPassword4" name="concebido" value="{{$animal->conceived}}" disabled=disabled>
                        <option selected></option>
                        <option value="MONTA"   @if( $animal->conceived == "MONTA") selected @endif >MONTA</option>
                        <option value="INSIMINACIÓN ARTIFICIAL"   @if( $animal->conceived == "INSIMINACIÓN ARTIFICIAL") selected @endif>INSIMINACIÓN ARTIFICIAL</option>
                        <option value="EMBRIONAL"   @if( $animal->conceived == "EMBRIONAL") selected @endif>EMBRIONAL</option>
                  </select>
                </div>

                <div  class="col-md-6">
                    <label for="">Estado Actual:</label>
                    <select class="form-control" id="inputPassword4" name="actual_state" value="{{$animal->actual_state}}">
                        <option selected></option>
                        <option value="DISPONIBLE" @if($animal->actual_state == "DISPONIBLE" ) selected @endif>DISPONIBLE</option>
                        <option value="VENDIDO"    @if($animal->actual_state == "VENDIDO" ) selected @endif>VENDIDO</option>
                        <option value="INACTIVO"   @if($animal->actual_state == "INACTIVO" ) selected @endif>INACTIVO</option>
                        <option value="REPRODUCIÓN"  @if($animal->actual_state == "REPRODUCIÓN" ) selected @endif>REPRODUCIÓN</option>
                  </select>
                </div>
                <div class="col-md-6-self-center" style="margin: 80px">
                    
                        <a type="submit" class="btn btn-secondary btn-lg"   href="{{url('/inactivos/fichaAnimales')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success btn-lg"  style="margin: 10px" href="{{ Redirect::to('/inactivos/fichaAnimales') }}" >Guardar</button>
  
                </div>
            </form>
        </div>
    </div>
    
    @endsection
    @section('js')
    @endsection
</body>