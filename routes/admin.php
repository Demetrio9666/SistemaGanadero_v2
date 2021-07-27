<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;


use App\Http\Controllers\Inactivo\AnimalesInactivosController;
use App\Http\Controllers\Inactivo\ReproductionMInactivosController;
use App\Http\Controllers\Inactivo\ReproductionMEInactivosController;
use App\Http\Controllers\Inactivo\ReproductionAInactivosController;
use App\Http\Controllers\Inactivo\TreatmentInactivosController;
use App\Http\Controllers\Inactivo\PartumInactivosController;
use App\Http\Controllers\Inactivo\LocationInactivosController;
use App\Http\Controllers\Inactivo\RaceInactivosController;
use App\Http\Controllers\Inactivo\VitaminInactivosController;
use App\Http\Controllers\Inactivo\DewormerInactivosController;
use App\Http\Controllers\Inactivo\VaccineInactivosController;
use App\Http\Controllers\Inactivo\AntibioticInactivosController;
use App\Http\Controllers\Inactivo\ArtificialInactivosController;
use App\Http\Controllers\Inactivo\PregnancyControlInactivosController;
use App\Http\Controllers\Inactivo\DewormingControlInactivosController;
use App\Http\Controllers\Inactivo\WeigthInactivosController;
use App\Http\Controllers\Inactivo\VaccineControlInactivosController;


use App\Http\Controllers\Dashboard\DashboardController;



use App\Http\Controllers\RaceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DewormerController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AntibioticController;
use App\Http\Controllers\ArtificialReproductionController;
use App\Http\Controllers\File_animaleController;
use App\Http\Controllers\Vaccine_controlController;
use App\Http\Controllers\Weigth_controlController;
use App\Http\Controllers\Deworming_controlController;
use App\Http\Controllers\Pregnancy_controlController;
use App\Http\Controllers\File_partumController;
use App\Http\Controllers\File_treatmentController;
use App\Http\Controllers\File_reproductionMController;  
use App\Http\Controllers\File_reproductionAController;  
use App\Http\Controllers\External_mountController;

Route::get('/dashboard',[DashboardController::class,'Dashboard']);







Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
  return view('index');
})->name('index_admin');

Route::get('descarga-pdf-confRaza',[RaceController::class,'PDF']);
Route::get('exportar-excel-confRaza',[RaceController::class,'Excel']);


//FICHA ANIMALES
Route::resource('inactivos/fichaAnimales',AnimalesInactivosController::class)->names('inactivos.fichaAnimales');
Route::resource('fichaAnimal',File_animaleController::class)->names('fichaAnimal');
Route::get('descarga-pdf-fichaAnimal',[File_animaleController::class,'PDF']);
Route::get('exportar-excel-fichaAnimal',[File_animaleController::class,'Excel']);


//FICHA DE PARTOS
Route::resource('inactivos/fichaPartos',PartumInactivosController::class)->names('inactivos.fichaPartos');
Route::resource('fichaParto',File_partumController::class)->names('fichaParto');
Route::get('descarga-pdf-fichaParto',[File_partumController::class,'PDF']);
Route::get('exportar-excel-fichaParto',[File_partumController::class,'Excel']);



//FICHA REPRODUCCION POR MONTA NATURAL INTERNA
Route::resource('inactivos/fichaReproduccionM',ReproductionMInactivosController::class)->names('inactivos.fichaReproduccionM');
Route::resource('fichaReproduccionM',File_reproductionMController::class)->names('fichaReproduccionM');
Route::get('descarga-pdf-fichaReproduccionM',[File_reproductionMController::class,'PDF']);
Route::get('exportar-excel-fichaReproduccionM',[File_reproductionMController::class,'Excel']);


//FICHA DE REPRODUCCION POR MONTA NATURAL EXTERNA
Route::resource('inactivos/fichaReproduccionEx',ReproductionMEInactivosController::class)->names('inactivos.fichaReproduccionEx');
Route::resource('fichaReproduccionEx',External_mountController::class)->names('fichaReproduccionEx');
Route::get('descarga-pdf-fichaReproduccionEx',[External_mountController::class,'PDF']);
Route::get('exportar-excel-fichaReproduccionEx',[External_mountController::class,'Excel']);


//FICHA DE REPRODUCCION ARTIFICIAL
Route::resource('inactivos/fichaReproduccionA',ReproductionAInactivosController::class)->names('inactivos.fichaReproduccionA');
Route::resource('fichaReproduccionA',File_reproductionAController::class)->names('fichaReproduccionA');
Route::get('descarga-pdf-fichaReproduccionA',[File_reproductionAController::class,'PDF']);
Route::get('exportar-excel-fichaReproduccionA',[File_reproductionAController::class,'Excel']);


//FICHA DE TRATAMIENTOS
Route::resource('inactivos/fichaTratamientos',TreatmentInactivosController::class)->names('inactivos.fichaTratamientos');
Route::resource('fichaTratamiento',File_treatmentController::class)->names('fichaTratamiento');
Route::get('descarga-pdf-fichaTratamiento',[File_treatmentController::class,'PDF']);
Route::get('exportar-excel-fichaTratamiento',[File_treatmentController::class,'Excel']);


//CONFI UBICACION
Route::resource('inactivos/Ubicaciones',LocationInactivosController::class)->names('inactivos.Ubicaciones');
Route::resource('confUbicacion',LocationController::class)->names('confUbicacion');
Route::get('descarga-pdf-confUbicacion',[LocationController::class,'PDF']);
Route::get('exportar-excel-confUbicacion',[LocationController::class,'Excel']);

//CONFI RAZAS
Route::resource('inactivos/Razas',RaceInactivosController::class)->names('inactivos.Razas');
Route::resource('confRaza',RaceController::class)->names('confRaza');
Route::get('descarga-pdf-confRaza',[RaceController::class,'PDF']);
Route::get('exportar-excel-confRaza',[RaceController::class,'Excel']);


//CONFI VITAMINAS
Route::resource('inactivos/Vitaminas',VitaminInactivosController::class)->names('inactivos.Vitaminas');
Route::resource('confVi',VitaminController::class)->names('confVi');
Route::get('descarga-pdf-confVi',[DewormerController::class,'PDF']);
Route::get('exportar-excel-confVi',[DewormerController::class,'Excel']);

//CONFI DESPARACITANTES
Route::resource('inactivos/Desparasitantes',DewormerInactivosController::class)->names('inactivos.Desparasitantes');
Route::resource('confDespa',DewormerController::class)->names('confDespa');
Route::get('descarga-pdf-confDespa',[DewormerController::class,'PDF']);
Route::get('exportar-excel-confDespa',[DewormerController::class,'Excel']);

//CONFI DE VACUNAS
Route::resource('inactivos/Vacunas',VaccineInactivosController::class)->names('inactivos.Vacunas');
Route::resource('confVacuna',VaccineController::class)->names('confVacuna');
Route::get('descarga-pdf-confVacuna',[VaccineController::class,'PDF']);
Route::get('exportar-excel-confVacuna',[VaccineController::class,'Excel']);


//CONFI DE ANTIBIOTICOS
Route::resource('inactivos/Antibioticos',AntibioticInactivosController::class)->names('inactivos.Antibioticos');
Route::resource('confAnt',AntibioticController::class)->names('confAnt');
Route::get('descarga-pdf-confAnt',[AntibioticController::class,'PDF']);
Route::get('exportar-excel-confAnt',[AntibioticController::class,'Excel']);


//CONFI DE MATERIALES GENETICOS
Route::resource('inactivos/Materiales',ArtificialInactivosController::class)->names('inactivos.Materiales');
Route::resource('confMate',ArtificialReproductionController::class)->names('confMate');
Route::get('descarga-pdf-confMate',[ArtificialReproductionController::class,'PDF']);
Route::get('exportar-excel-confMate',[ArtificialReproductionController::class,'Excel']);

//CONTROL DE PREÑES
Route::resource('inactivos/controlPrenes',PregnancyControlInactivosController::class)->names('inactivos.controlPrenes');
Route::resource('controlPrenes',Pregnancy_controlController::class)->names('controlPrenes');
Route::get('descarga-pdf-controlPrenes',[Pregnancy_controlController::class,'PDF']);
Route::get('exportar-excel-controlPrenes',[Pregnancy_controlController::class,'Excel']);


//CONTROL DE DESPARACITACION
Route::resource('inactivos/controlDesparasitaciones',DewormingControlInactivosController::class)->names('inactivos.controlDesparasitaciones');
Route::resource('controlDesparasitacion',Deworming_controlController::class)->names('controlDesparasitacion');
Route::get('descarga-pdf-controlDesparasitacion',[Deworming_controlController::class,'PDF']);
Route::get('exportar-excel-controlDesparasitacion',[Deworming_controlController::class,'Excel']);


//CONTROL DE PESO
Route::resource('inactivos/controlPesos',WeigthInactivosController::class)->names('inactivos.controlPesos');
Route::resource('controlPeso',Weigth_controlController::class)->names('controlPeso');
Route::get('descarga-pdf-controlPeso',[Weigth_controlController::class,'PDF']);
Route::get('exportar-excel-controlPeso',[Weigth_controlController::class,'Excel']);

//CONTROL DE VACUNAS
Route::resource('inactivos/controlVacunas',VaccineControlInactivosController::class)->names('inactivos.controlVacunas');
Route::resource('controlVacuna',Vaccine_controlController::class)->names('controlVacuna');
Route::get('descarga-pdf-controlVacuna',[Vaccine_controlController::class,'PDF']);
Route::get('exportar-excel-controlVacuna',[Vaccine_controlController::class,'Excel']);


//SEGURIDAD
Route::resource('rol',RoleController::class)->names('rol');
Route::resource('usuarios',UserController::class)->names('usuarios');


//Route::get('/welcome',[HomeController::class,'welcome']);
