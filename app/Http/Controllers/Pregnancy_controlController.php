<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\File_animale;
use App\Models\Pregnancy_control;
use App\Models\Vitamin;
use App\Http\Requests\StorePregnancyC;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Pregnancy_controlExport;


class Pregnancy_controlController extends Controller
{
    public function __construct(){
        $this->middleware('can:controlPrenes.index')->only('index');
        $this->middleware('can:controlPrenes.create')->only('create','store');
        $this->middleware('can:controlPrenes.edit')->only('show','edit','update');
        $this->middleware('can:controlPrenes.destroy')->only('delete');
    }

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
                        ->where('pregnancy_control.actual_state','=','Disponible')
             ->get();     
        return view('PregnancyC.index-PregnancyC',compact('pre'));
    }

    public function PDF(){
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
                   ->where('pregnancy_control.actual_state','=','Disponible')
        ->get();    
        $pdf = PDF::loadView('PregnancyC.pdf',compact('pre'));
        return $pdf->setPaper('a4','landscape')->download('ControlPreñes.pdf');

    }
    public function Excel(){
        return Excel::download(new Pregnancy_controlExport, 'ControlPreñes.xlsx');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vitamina= Vitamin::all();
        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode',
                     'date',
                     'age_month',
                     'sex'
                  )
                  
                  ->where('actual_state','=','Disponible')
                  ->where('stage','=','Vaca')
                  
        ->get();
        return view('PregnancyC.create-PregnancyC',compact('vitamina','animal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePregnancyC $request)
    {
        $pre = new Pregnancy_control();
       
        $pre->date = $request->date;
        $pre->animalCode_id = $request->animalCode_id;
        $pre->vitamin_id = $request->vitamin_id;
        $pre->alternative1 = $request->alternative1;
        $pre->alternative2 = $request->alternative2;
        $pre->observation = $request->observation;
        $pre->date_r = $request->date_r;
        $pre->actual_state = $request->actual_state;
        
        $pre->save(); 

        return redirect('/controlPrenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pregnancyC.edit-pregnancyC',compact('id'));
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
        return view('pregnancyC.edit-pregnancyC', compact('pre','vitamina','animal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePregnancyC $request, $id)
    {
        $pre = Pregnancy_control::findOrFail($id);
        $pre->date = $request->date;
        $pre->animalCode_id = $request->animalCode_id;
        $pre->vitamin_id = $request->vitamin_id;
        $pre->alternative1 = $request->alternative1;
        $pre->alternative2 = $request->alternative2;
        $pre->observation = $request->observation;
        $pre->date_r = $request->date_r;
        $pre->actual_state = $request->actual_state;
        $pre->save(); 
        return redirect('/controlPrenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
