<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['rol'=>'ADMINISTRADOR']);
        $supervisor = Role::create(['rol'=>'SUPERVISOR']);
        $invitado = Role::create(['rol'=>'INVITADO']);


       
        Permission::create(['name'=>'fichaAnimal.index',
                           'description'=>'Visualizar Ficha de Animales'])->syncRoles([$admin]);

        Permission::create(['name'=>'fichaAnimal.create',
                           'description'=>'Crear Ficha de Animales'])->syncRoles([$admin]);
     
        Permission::create(['name'=>'fichaAnimal.edit',
                           'description'=>'Editar Ficha de Animales'])->syncRoles([$admin]);
      
        Permission::create(['name'=>'fichaAnimal.destroy',
                           'description'=>'Eliminar Ficha de Animales'])->syncRoles([$admin]);
        
       
        //////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'fichaParto.index',
                           'description'=>'Visualizar Ficha de Parto'])->syncRoles([$admin]);
        
        Permission::create(['name'=>'fichaParto.create',
                           'description'=>'Crear Ficha de Parto'])->syncRoles([$admin]);
        
        Permission::create(['name'=>'fichaParto.edit',
                           'description'=>'Editar Ficha de Parto'])->syncRoles([$admin]);
        
        Permission::create(['name'=>'fichaParto.destroy',
                           'description'=>'Eliminar Ficha de Parto'])->syncRoles([$admin]);
    
        //////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'fichaTratamiento.index',
                           'description'=>'Visualizar Ficha de Tratamiento'])->syncRoles([$admin,$supervisor]);
    
        Permission::create(['name'=>'fichaTratamiento.create',
                           'description'=>'Crear Ficha de Tratamiento'])->syncRoles([$admin,$supervisor]);
        
        Permission::create(['name'=>'fichaTratamiento.edit',
                           'description'=>'Editar Ficha de Tratamiento'])->syncRoles([$admin,$supervisor]);
        

        Permission::create(['name'=>'fichaTratamiento.destroy',
                           'description'=>'Eliminar Ficha de Tratamiento'])->syncRoles([$admin,$supervisor]);
        
        //////////////////////////////////////////////////////////////////////////////

        
        Permission::create(['name'=>'fichaReproduccionM.index',
                           'description'=>'Visualizar Ficha Reproducci??n por Monta Interna'])->syncRoles([$admin,$supervisor,$invitado]);
    

        Permission::create(['name'=>'fichaReproduccionM.create',
                           'description'=>'Crear Ficha Reproducci??n por Monta Interna'])->syncRoles([$admin,$supervisor,$invitado]);
        

        Permission::create(['name'=>'fichaReproduccionM.edit',
                           'description'=>'Editar Ficha Reproducci??n por Monta Interna'])->syncRoles([$admin,$supervisor,$invitado]);
        

        Permission::create(['name'=>'fichaReproduccionM.destroy',
                           'description'=>'Eliminar Ficha Reproducci??n por Monta Interna'])->syncRoles([$admin,$supervisor,$invitado]);
        


        ///////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'fichaReproduccionA.index',
                           'description'=>'Visualizar Ficha de Reproducci??n Artificial'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'fichaReproduccionA.create',
                           'description'=>'Crear Ficha de Reproducci??n Artificial'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'fichaReproduccionA.edit',
                           'description'=>'Editar Ficha de Reproducci??n Artificial'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'fichaReproduccionA.destroy',
                           'description'=>'Eliminar Ficha de Reproducci??n Artificial'])->syncRoles([$admin,$supervisor,]);
       /////////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'fichaReproduccionEx.index',
                           'description'=>'Visualizar Ficha Reproducci??n Externo'])->syncRoles([$admin,$supervisor,$invitado]);
        

        Permission::create(['name'=>'fichaReproduccionEx.create',
                           'description'=>'Crear Ficha Reproducci??n Externo'])->syncRoles([$admin,$supervisor,$invitado]);
        

        Permission::create(['name'=>'fichaReproduccionEx.edit',
                           'description'=>'Editar Ficha Reproducci??n Externo'])->syncRoles([$admin,$supervisor,$invitado]);
        

        Permission::create(['name'=>'fichaReproduccionEx.destroy',
                           'description'=>'Eliminar Ficha Reproducci??n Exerno'])->syncRoles([$admin,$supervisor]);
        
        ////////////////////////////////////////////////////////////////////////////////
      
        Permission::create(['name'=>'controlVacuna.index',
                           'description'=>'Visualizar Control de Vacunaci??n'])->syncRoles([$admin,$supervisor]);
        

        Permission::create(['name'=>'controlVacuna.create',
                           'description'=>'Crear Control de Vacunaci??n'])->syncRoles([$admin,$supervisor]);
        

        Permission::create(['name'=>'controlVacuna.edit',
                           'description'=>'Editar Control de Vacunaci??n'])->syncRoles([$admin,$supervisor]);
        

        Permission::create(['name'=>'controlVacuna.destroy',
                           'description'=>'Eliminar Control de Vacunaci??n'])->syncRoles([$admin,$supervisor]);
        


        ////////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'controlPeso.index',
                            'description'=>'Visualizar Control de Peso'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'controlPeso.create',
                            'description'=>'Crear Control de Peso'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'controlPeso.edit',
                            'description'=>'Editar Control de Peso'])->syncRoles([$admin,$supervisor,$invitado]);

        Permission::create(['name'=>'controlPeso.destroy',
                            'description'=>'Eliminar Control de Peso'])->syncRoles([$admin,$supervisor,$invitado]);

        ////////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'controlDesparasitacion.index',
                            'description'=>'Visualizar Control de Desparasitaci??n'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlDesparasitacion.create',
                            'description'=>'Crear Control de Desparasitaci??n'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlDesparasitacion.edit',
                            'description'=>'Editar Control de Desparasitaci??n'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlDesparasitacion.destroy',
                            'description'=>'Eliminar Control de Desparasitaci??n'])->syncRoles([$admin,$supervisor]);
        ///////////////////////////////////////////////////////////////////////////////


        Permission::create(['name'=>'controlPrenes.index',
                            'description'=>'Visualizar Control Pre??ez'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlPrenes.create',
                            'description'=>'Crear Control Pre??ez'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlPrenes.edit',
                            'description'=>'Editar Control Pre??ez'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'controlPrenes.destroy',
                            'description'=>'Eliminar Control Pre??ez'])->syncRoles([$admin,$supervisor]);

       /////////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'confDespa.index',
                            'description'=>'Visualizar Configuraci??n de Desparacitante'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confDespa.create',
                            'description'=>'Crear Configuraci??n de Desparacitante'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confDespa.edit',
                            'description'=>'Editar Configuraci??n de Desparacitante'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confDespa.destroy',
                            'description'=>'Eliminar Configuraci??n de Desparacitante'])->syncRoles([$admin,$supervisor]);
        /////////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'confVacuna.index',
                            'description'=>'Visualizar Configuraci??n de Vacunas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVacuna.create',
                            'description'=>'Crear Configuraci??n de Vacunas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVacuna.edit',
                            'description'=>'Editar Configuraci??n de Vacunas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVacuna.destroy',
                            'description'=>'Eliminar Configuraci??n de Vacunas'])->syncRoles([$admin,$supervisor]);
        ///////////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'confVi.index',
                            'description'=>'Visualizar Configuraci??n de Vitaminas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVi.create',
                            'description'=>'Crear Configuraci??n de Vitaminas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVi.edit',
                            'description'=>'Editar Configuraci??n de Vitaminas'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confVi.destroy',
                            'description'=>'Eliminar Configuraci??n de Vitaminas'])->syncRoles([$admin,$supervisor]);
        
        //////////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'confAnt.index',
                            'description'=>'Visualizar Configuraci??n de antibi??ticos'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confAnt.create',
                            'description'=>'Crear Configuraci??n de antibi??ticos'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confAnt.edit',
                            'description'=>'Editar Configuraci??n de antibi??ticos'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confAnt.destroy',
                            'description'=>'Eliminar Configuraci??n de antibi??ticos'])->syncRoles([$admin,$supervisor]);

        //////////////////////////////////////////////////////////////////////////////////
        
        Permission::create(['name'=>'confMate.index',
                            'description'=>'Visualizar Configuraci??n de Material Gen??tico'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confMate.create',
                            'description'=>'Crear Configuraci??n de Material Gen??tico'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confMate.edit',
                            'description'=>'Editar Configuraci??n de Material Gen??tico'])->syncRoles([$admin,$supervisor]);

        Permission::create(['name'=>'confMate.destroy',
                            'description'=>'Eliminar Configuraci??n de Material Gen??tico'])->syncRoles([$admin,$supervisor]);


        ///////////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'confUbicacion.index',
                            'description'=>'Visualizar Configuraci??n de Ubicaci??n Interna'])->syncRoles([$admin]);

        Permission::create(['name'=>'confUbicacion.create',
                            'description'=>'Crear Configuraci??n de Ubicaci??n Interna'])->syncRoles([$admin]);

        Permission::create(['name'=>'confUbicacion.edit',
                            'description'=>'Editar Configuraci??n de Ubicaci??n Interna'])->syncRoles([$admin]);

        Permission::create(['name'=>'confUbicacion.destroy',
                            'description'=>'Eliminar Configuraci??n de Ubicaci??n Interna'])->syncRoles([$admin]);

        /////////////////////////////////////////////////////////////////////////////////////
        Permission::create(['name'=>'confRaza.index',
                            'description'=>'Visualizar Configuraci??n de Razas'])->syncRoles([$admin]);

        Permission::create(['name'=>'confRaza.create',
                            'description'=>'Crear Configuraci??n de Razas'])->syncRoles([$admin]);

        Permission::create(['name'=>'confRaza.edit',
                            'description'=>'Editar Configuraci??n de Razas'])->syncRoles([$admin]);

        Permission::create(['name'=>'confRaza.destroy',
                            'description'=>'Eliminar Configuraci??n de Razas'])->syncRoles([$admin]);

        ///////////////////////////////////////////////////////////////////////////////////

        Permission::create(['name'=>'dashboard.index',
                            'description'=>'Visualizar Dashboards'])->syncRoles([$admin,$supervisor]);
        //////////////////////////////////////////////////////////////////////////////////


        ////////////////////////////////////////////////////////////////////////// 
        Permission::create(['name'=>'rol.index',
                            'description'=>'Visualizar Roles'])->syncRoles([$admin]);

        Permission::create(['name'=>'rol.create',
                            'description'=>'Crear Roles'])->syncRoles([$admin]);

        Permission::create(['name'=>'rol.edit',
                            'description'=>'Editar Roles'])->syncRoles([$admin]);

        Permission::create(['name'=>'rol.destroy',
                            'description'=>'Eliminar Roles'])->syncRoles([$admin]);

        Permission::create(['name'=>'rol.usuario.edit',
                            'description'=>'Editar Asignaci??n de Roles a Usuarios'])->syncRoles([$admin]);

        
        Permission::create(['name'=>'usuarios.index',
                            'description'=>'Visualizar Usuarios'])->syncRoles([$admin]);

        Permission::create(['name'=>'usuarios.create',
                            'description'=>'Crear Usuarios'])->syncRoles([$admin]);

        Permission::create(['name'=>'usuarios.edit',
                            'description'=>'Editar Usuarios'])->syncRoles([$admin]);

        Permission::create(['name'=>'usuarios.destroy',
                            'description'=>'Eliminar Usuarios'])->syncRoles([$admin]);

        Permission::create(['name'=>'actividad.index',
                            'description'=>'Visualizar Actividad de Usuario'])->syncRoles([$admin]);

       
        
    }
}
