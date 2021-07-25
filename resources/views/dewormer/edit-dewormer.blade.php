@extends('adminlte::page')
 <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Registration Form</title>
  </head>
  <body>
    @section('title')
    @section('css')
    <link rel="stylesheet" type="text/css" href="/css/configuracion2.css">
    @endsection
    @section('content_header')
        <div class="container" id="registration-form">
            @include('messages.message')
            <div class="image"></div>
            <div class="frm">
                <h1>Editar Desparacitantes</h1>
                <form action=" {{route('confDespa.update',$desp->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre del Desparacitante:</label>
                        <input type="text" class="form-control" id="dewormer_d" name="dewormer_d" value="{{$desp->dewormer_d}}" onblur="upperCase()">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Elaboración:</label>
                        <input type="date" class="form-control" id="fecha_e" name="date_e" value="{{$desp->date_e}}">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Caducidad:</label>
                        <input type="date" class="form-control" id="fecha_c" name="date_c" value="{{$desp->date_c}}" >
                    </div>  
                    <div class="form-group">
                        <label for="">Proveedor:</label>
                        <input type="text" class="form-control" id="supplier" name="supplier" value="{{$desp->supplier}}" onblur="upperCase()">
                    </div>    
                    <div  class="form-group">
                        <label for="">Estado Actual:</label>
                        <select class="form-control" id="inputPassword4" name="actual_state" value="{{$desp->actual_state}}">
                            <option value="DISPONIBLE" @if( $desp->actual_state == "DISPONIBLE") selected @endif>DISPONIBLE</option>
                            <option value="INACTIVO" @if( $desp->actual_state == "INACTIVO") selected @endif>INACTIVO</option>
                         </select>
                    </div>       
                    <div class="form-group">
                        <a type="submit" class="btn btn-secondary btn-lg" href="{{url('/confDespa')}}" >Cancelar</a>
                        <button type="submit" class="btn btn-success btn-lg"  href="{{ Redirect::to('/confDespa') }}" >Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @section('js')
    <script>
        function upperCase() {
               var x=document.getElementById("dewormer_d").value
               document.getElementById("dewormer_d").value=x.toUpperCase()
               var x=document.getElementById("supplier").value
               document.getElementById("supplier").value=x.toUpperCase()
           }

   </script>
    @endsection
  </body>