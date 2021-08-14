@extends('artificialR.base')
@section('nombre_regitro')
         Registro Material Genético
@endsection
@section('formulario')
<form action="{{route('confMate.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Fecha de Registro:</label>
        <input type="date" class="form-control {{$errors->has('date') ? 'is-invalid':''}}" id="fecha_r" name="date" value="{{old('date')}}">
        @error('date')
             <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Raza:</label>
        <select class="form-control {{$errors->has('race_id') ? 'is-invalid':''}}" id="razas" name="race_id" value="{{old('race_id')}}">
            <option selected></option>
            @foreach ( $razas as $i )   
                <option value="{{$i->id}}" @if(old('race_id') == $i->id) {{'selected'}} @endif>{{$i->race_d}}</option>
            @endforeach
        </select>
        @error('race_id')
             <div class="invalid-feedback">{{$message}}</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="">Tipo de Material Genético:</label>
        <select class="form-control {{$errors->has('reproduccion') ? 'is-invalid':''}}" id="inputPassword4"  name="reproduccion" value="{{old('reproduccion')}}">
            <option selected></option>
            <option value="PAJUELA" @if(old('reproduccion') == "PAJUELA") {{'selected'}} @endif>PAJUELA</option>
            <option value="HEMBRIONAL" @if(old('reproduccion') == "HEMBRIONAL") {{'selected'}} @endif >HEMBRIONAL</option>
      </select>
      @error('reproduccion')
             <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>  
    <div class="form-group">
        <label for="">Proveedor:</label>
        <input type="text" class="form-control {{$errors->has('supplier') ? 'is-invalid':''}}" id="proveedor" name="supplier" value="{{old('supplier')}}" onblur="upperCase()">
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
            <a type="submit" class="btn btn-secondary btn" href="{{url('/confMate')}}">Cancelar</a>
            <button type="submit" class="btn btn-success btn"  href="{{ Redirect::to('/confMate') }}" >Guardar</button>
        </div>
    </center>    
    @include('layouts.base-usuario')
</form>

@endsection
