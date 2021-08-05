@extends('race.base')
@section('nombre_regitro')
         Editar Raza
@endsection
@section('formulario')
<form action=" {{route('confRaza.update',$raza->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nombre de la Raza:</label>
        <input type="text" class="form-control" id="raza" name="race_d" value="{{$raza->race_d}}" >
    </div>
    <div class="form-group">
        <label for="">Porcentaje:</label>
        <input type="int" class="form-control" id="porcentaje" name="percentage" value="{{$raza->percentage}}">
    </div>      
    <div  class="form-group">
        <label for="">Estado Actual:</label>
        <select class="form-control" id="inputPassword4" name="actual_state" value="{{$raza->actual_state}}">
            <option value="DISPONIBLE" @if( $raza->actual_state == "DISPONIBLE") selected @endif>DISPONIBLE</option>
            <option value="INACTIVO" @if( $raza->actual_state == "INACTIVO") selected @endif>INACTIVO</option>
         </select>
    </div>     
    <center>
        <div class="form-group"  style="margin: 40px">
            <a type="submit" class="btn btn-secondary btn" href="{{url('/confRaza')}}" >Cancelar</a>
            <button type="submit" class="btn btn-success btn"  href="{{ Redirect::to('/confRaza') }}" >Guardar</button>
        </div>
    </center>
</form>
@endsection

