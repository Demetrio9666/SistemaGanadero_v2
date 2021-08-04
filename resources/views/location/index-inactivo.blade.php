@extends('layouts.baseTablasInactivas')

@section('nombre_card')
Registros de Ubicaciones Inactivas
@endsection
@section('boton_atras')
"{{url('/confUbicacion')}}"
@endsection
@section('nombre_tabla')
Registros de Ubicaciones
@endsection
@section('tabla')
<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>             
        <tr>
            <th>Nombre de ubicación</th>
            <th>Descripción</th>
            <th>Estado Actual</th> 
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>  
        @foreach ($ubicacion as $i)          
        <tr>
            <td>{{$i->location_d}}</td>
            <td >{{$i->description}}</td>
            <td >{{$i->actual_state}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('inactivos.Ubicaciones.edit',$i->id)}}" ><i class="fas fa-edit"></i></a>
                <form action="{{route('inactivos.Ubicaciones.destroy',$i->id)}}" method="POST" class="d-inline  formulario-eliminar">
                    @csrf
                    @method('DELETE') 
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
