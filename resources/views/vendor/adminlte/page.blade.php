@extends('adminlte::master')

@inject('layoutHelper', \JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper)

@if($layoutHelper->isLayoutTopnavEnabled())
    @php( $def_container_class = 'container' )
@else
    @php( $def_container_class = 'container-fluid' )
@endif

@section('adminlte_css')
    <link href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{('/css/tabla.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/bootstrap.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('datatables/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Buttons-1.7.1/css/buttons.bootstrap4.min.css')}}">
   
    
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        <div class="content-wrapper {{ config('adminlte.classes_content_wrapper') ?? '' }}">

            {{-- Content Header --}}
            <div class="content-header">
                <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class }}">
                    @yield('content_header')
                </div>
            </div>

            {{-- Main Content --}}
            <div class="content">
                <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                    @yield('content')
                </div>
            </div>

        </div>

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>


    
    <script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script> 
    <script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('datatables/dataTables.responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('pdfmake-0.1.36/pdfmake.min.js')}}"></script>
    <script src="{{asset('pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script src="{{asset('Buttons-1.7.1/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('Buttons-1.7.1/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('Buttons-1.7.1/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('Buttons-1.7.1/js/buttons.bootstrap4.min.js')}}"></script>
    

    
    <script>
        $('#tabla').DataTable({
            responsive: true,
          "language": {
             "lengthMenu": "Mostrar "+
             `<select class="custom-select custom-selec form-control form-control">
                     <option value = '10' >10</option> 
                     <option  value = '25' >25</option>
                     <option  value = '50' >50</option>
                     <option  value = '100' >100</option>
                     <option  value =  '-1'>All</option>
             </select>`
             +" Registro por Pagina",
             "zeroRecords": "Resultados No encontrados -Disculpe",
             "info": "Mostrando la página _PAGE_ de _PAGES_",
             "infoEmpty": "No records available",
             "infoFiltered": "(Filtrado de  _MAX_ Registros Totales)",
             'search': "Buscar:",
             'paginate':{
                 'next':'Siguiente',
                 'previous':'Anterior'
             }
         },
        /* dom: 'Bfrtilp',
         buttons:[
             {
                 extend:'excel',
                 text: '<i class="fas fa-file-excel"></i>',
                 titleAttr:'Exportar a Excel',
                 className:'btn btn-success',
                 excelStyles: {                // Add an excelStyles definition
                              template: 'blue_medium',  // Apply the 'blue_medium' template
                    },
             },
             {
                 extend:'pdfHtml5',
                 text: '<i class="fas fa-file-pdf"></i>',
                 titleAttr:'Exportar a PDF',
                 className:'btn btn-danger'
             },
             {
                 extend:'print',
                 text: '<i class="fas fa-print"></i>',
                 titleAttr:'Imprimir',
                 className:'btn btn-warning'
             },
         ],*/

        });


     </script>
      @if (session('eliminar') == 'ok')
      <script>
           Swal.fire(
                      '¡Eliminado!',
                      'El registro fue eliminado.',
                      'success'
                      )      
      </script>
  @endif
  <script>
      $('.formulario-eliminar').submit(function(e){
          e.preventDefault();
            Swal.fire({
                      title: 'Está seguro?',
                      text: "Este registro se eliminara definitivamente",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: '¡Si, Eliminar!',
                      concelButtonText: 'Cancelar'
                  }).then((result) => {
                  if (result.isConfirmed) {
                      this.submit();
                  }
          }) 
      });
  </script>

  
    @stack('js')
    @yield('js')
@stop