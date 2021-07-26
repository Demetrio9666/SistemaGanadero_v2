@extends('adminlte::page')
<head>
    @section('css')
       
    @endsection 
</head>
  <body>
    
    @section('title')
    
    @section('content_header')
    <a type="button" class="btn-lg btn-success" style="margin: 10px" id="button-addon1" href="{{url('/confAnt')}}"><i class="fas fa-arrow-left"></i></a>
    <div class="card">
        <div class="card-body">
          <table id="tabla" class="table table-striped table-bordered" style="width:100%">
            <thead>             
                <tr>
                    <th>Nombre del Antibiótico</th>
                    <th>Fecha Elaboración</th>
                    <th>Fecha Caducidad </th>
                    <th>Proveedor</th>
                    <th>Estado Actual</th> 
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>  
                @foreach ($anti as $i)          
                <tr>
                    <td>{{$i->antibiotic_d}}</td>
                    <td >{{$i->date_e}}</td>
                    <td>{{$i->date_c}}</td>
                    <td >{{$i->supplier}}</td>
                    <td >{{$i->actual_state}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('inactivos.Antibioticos.edit',$i->id)}}" ><i class="fas fa-edit"></i></a>
                        <form action="{{route('inactivos.Antibioticos.destroy',$i->id)}}" method="POST" class="d-inline  formulario-eliminar">
                            @csrf
                            @method('DELETE') 
                            <button type="submit"  class="btn btn-danger" value="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>                         
                    </td>  
                </tr>
                @endforeach
           
        </table>
        </div>
    </div>
    @endsection
</body>
    @section('js')
           
    @endsection