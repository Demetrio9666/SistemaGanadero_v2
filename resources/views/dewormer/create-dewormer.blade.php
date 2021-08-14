@extends('dewormer.base')
@section('nombre_regitro')
Registar Desparacitante
@endsection
@section('formulario')
<form action="{{route('confDespa.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nombre del Desparasitante:</label>
        <input type="text" class="form-control {{$errors->has('dewormer_d') ? 'is-invalid':''}}" id="dewormer_d" name="dewormer_d" value="{{old('dewormer_d')}}"  onblur="upperCase()">
        @error('dewormer_d')
             <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Fecha Elaboración:</label>
        <input type="date" class="form-control {{$errors->has('date_e') ? 'is-invalid':''}}" id="fecha_e" name="date_e" value="{{old('date_e')}}"  >
        @error('date_e')
           <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Fecha Caducidad:</label>
        <input type="date" class="form-control {{$errors->has('date_c') ? 'is-invalid':''}}" id="fecha_c" name="date_c" value="{{old('date_c')}}" >
        @error('date_c')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>  
    <div class="form-group">
        <label for="">Proveedor:</label>
        <input type="text" class="form-control {{$errors->has('supplier') ? 'is-invalid':''}}" id="supplier" name="supplier" value="{{old('supplier')}}"  onblur="upperCase()">
        @error('supplier')
             <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>  
    <div  class="form-group">
        <label for="">Estado Actual:</label>
        <select class="form-control" id="inputPassword4" name="actual_state" value="{{old('actual_state')}}">
            <option value="DISPONIBLE"@if(old('actual_state') == "DISPONIBLE") {{'selected'}} @endif>DISPONIBLE</option>
            <option value="INACTIVO"@if(old('actual_state') == "INACTIVO") {{'selected'}} @endif>INACTIVO</option>
         </select>
    </div>     
    <center>
        <div class="form-group" style="margin: 40px">
            <a type="submit" class="btn btn-secondary btn" href="{{url('/confDespa')}}">Cancelar</a>
            <button type="submit" class="btn btn-success btn"  href="{{ Redirect::to('/confDespa') }}" >Guardar</button>
        </div>
    </center>
    @include('layouts.base-usuario')
</form>
@endsection

