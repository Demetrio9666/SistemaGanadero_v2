<?php

namespace App\Http\Controllers\Inactivo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\File_animale;
use App\Models\Pregnancy_control;
use App\Models\Vitamin;
use Spatie\Activitylog\Models\Activity;

class PregnancyControlInactivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pre = DB::table('pregnancy_control')
             ->join('vitamin','pregnancy_control.vitamin_id','=','vitamin.id')
             ->join('file_animale','pregnancy_control.animalCode_id','=','file_animale.id')
             ->select('pregnancy_control.id',
                      'pregnancy_control.date',
                       'file_animale.animalCode as animal',
                        'vitamin.vitamin_d as vitamina',
                        'pregnancy_control.alternative1 as alt1',
                        'pregnancy_control.alternative2  as alt2',
                         'pregnancy_control.observation',
                        'pregnancy_control.date_r',
                        'pregnancy_control.actual_state')
                        ->where('pregnancy_control.actual_state','=','Inactivo')
             ->get();     
        return view('PregnancyC.index-inactivo',compact('pre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pregnancyC.edit-inactivo',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vitamina= Vitamin::all();
        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode',
                     'date',
                     'age_month',
                     'sex'
                  )
                  ->where('sex','Hembra')
                  ->where('age_month','>=',24)
        ->get();
        $pre = Pregnancy_control::findOrFail($id);
        return view('pregnancyC.edit-inactivo', compact('pre','vitamina','animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pre = Pregnancy_control::findOrFail($id);
        $pre->actual_state = $request->actual_state;
        $pre->save(); 
        $actvividad = new  Activity();
        $actvividad->log_name = $request->usuario;
        $actvividad->email = $request->correo;

        $super= str_replace('"','',$request->rol);
        $super2= str_replace('[','',$super);
        $super3= str_replace(']','',$super2);

        $actvividad->rol =$super3 ;
        $actvividad->subject_id =$request->id;
        $actvividad->description =('ACTUALIZAR');
        $actvividad->view ='CONTROL PREÑES INACTIVO';

        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode'  
                  )->get();
        foreach($animal as $i ){
            if($request->animalCode_id == $i->id){
                    $animal_Code=$i->animalCode;
                    $actvividad->data = $animal_Code;
            }
        }
        $actvividad->subject_type =('App\Models\Pregnancy_control');
    
        $actvividad->save();
        return redirect('inactivos/controlPrenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $pre = Pregnancy_control::findOrFail($id);
        $actvividad = new  Activity();
        $actvividad->log_name = $request->usuario;
        $actvividad->email = $request->correo;

        $super= str_replace('"','',$request->rol);
        $super2= str_replace('[','',$super);
        $super3= str_replace(']','',$super2);

        $actvividad->rol =$super3 ;
        $actvividad->subject_id =$request->id;
        $actvividad->description =('ELIMINAR');
        $actvividad->view ='CONTROL PREÑES';

        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode'  
                  )->get();
        foreach($animal as $i ){
            if($pre->animalCode_id == $i->id){
                    $animal_Code=$i->animalCode;
                    $actvividad->data = $animal_Code;
            }
        }
        $actvividad->subject_type =('App\Models\Pregnancy_control');
    
        $actvividad->save();
        $pre->delete();
        return redirect('inactivos/controlPrenes')->with('eliminar','ok');
    }
}
