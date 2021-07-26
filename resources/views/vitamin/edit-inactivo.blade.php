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
                <h1>Editar Vitaminas Inactivas</h1>
                <form action=" {{route('inactivos.Vitaminas.update',$vitamina->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre de la Vitamina:</label>
                        <input type="text" class="form-control" id="vitamina_d" name="vitamin_d" value="{{$vitamina->vitamin_d}}" disabled=disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Elaboración:</label>
                        <input type="date" class="form-control" id="fecha_e" name="date_e" value="{{$vitamina->date_e}}" disabled=disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Caducidad:</label>
                        <input type="date" class="form-control" id="fecha_c" name="date_c" value="{{$vitamina->date_c}}" disabled=disabled>
                    </div>  
                    <div class="form-group">
                        <label for="">Proveedor:</label>
                        <input type="text" class="form-control" id="proveedor" name="supplier" value="{{$vitamina->supplier}}"disabled=disabled >
                    </div>   
                    <div  class="form-group">
                        <label for="">Estado Actual:</label>
                            <select class="form-control" id="inputPassword4" name="actual_state" value="{{$vitamina->actual_state}}">
                                <option value="DISPONIBLE" @if( $vitamina->actual_state == "DISPONIBLE") selected @endif>DISPONIBLE</option>
                                <option value="INACTIVO" @if( $vitamina->actual_state == "INACTIVO") selected @endif>INACTIVO</option>
                            </select>
                    </div>        
                    <div class="form-group">
                        <a type="submit" class="btn btn-secondary btn-lg" href="{{url('inactivos/Vitaminas')}}" >Cancelar</a>
                        <button type="submit" class="btn btn-success btn-lg"  href="{{ Redirect::to('inactivos/Vitaminas') }}" >Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @section('js')
    @endsection
  </body>