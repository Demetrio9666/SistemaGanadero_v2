@extends('layouts.baseTablasInactivas')

@section('nombre_card')
       Registros de Partos Inactivos
@endsection
@section('boton_atras')
"{{url('/fichaParto')}}"
@endsection
@section('nombre_tabla')
Fichas de Partos
@endsection
@section('tabla')
<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>             
        <tr>
            <th>Fecha</th>
            <th>Código del Animal</th>
            <th>Cant.Machos </th>
            <th>Cant.Hembras</th>
            <th>Cant.Muertos</th>
            <th>Estado Animal</th>
            <th>Tipo de Parto</th>
            <th>Estado Actual</th> 
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($par as $i)          
        <tr>
            <td>{{$i->date}}</td>
            <td>{{$i->animal}}</td>
            <td >{{$i->male}}</td>
            <td >{{$i->female}}</td>
            <td >{{$i->dead}}</td>
            <td >{{$i->mother_status}}</td>
            <td >{{$i->partum_type}}</td>
            <td >{{$i->actual_state}}</td>
            <td>
                <a class="btn-lg btn-primary d-grid gap-2 d-md-block " href="{{route('inactivos.fichaPartos.edit',$i->id)}}" ><i class="fas fa-edit"></i></a>
                <form action="{{route('inactivos.fichaPartos.destroy',$i->id)}}"  class="d-inline  formulario-eliminar  "  method="POST">
                    @method('DELETE') 
                    @csrf
                    <button type="submit"  class="btn btn-danger" value="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>                         
            </td>  
        </tr>
        @endforeach 

    </tbody>
   
</table>
@endsection



















