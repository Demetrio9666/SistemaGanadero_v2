<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\File_animale;
use App\Models\Weigth_control;
class Weigth_controlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesoC = DB::table('weigth_control')
                ->join('file_animale','weigth_control.animalCode_id','=','file_animale.id')
                ->select('weigth_control.id','weigth_control.date_v','file_animale.animalCode as animal','weigth_control.weigtht','weigth_control.date_vr')
                ->get();
        return view('weigthC.index-weigthC',compact('pesoC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode',
                     'date_n',
                     'age_month',
                     'sex'
                  )
                  
        ->get();
        return view('weigthC.create-weigthC',compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesoC = new Weigth_control();
       
        $pesoC->date_v = $request->date_v;
        $pesoC->animalCode_id = $request->animalCode_id;
        $pesoC->weigtht = $request->weigtht;
        $pesoC->date_vr = $request->date_vr;
        $pesoC->save(); 
            //return redirect()->route();
        return redirect('/controlPeso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('weigthC.edit-weigthC',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal  = DB::table('file_animale')
        ->select(    'id',
                     'animalCode',
                     'date_n',
                     'age_month',
                     'sex'
                  )
                  
        ->get();
        return view('weigthC.edit-weigthC', compact('animal'));
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
        $pesoC = Weigth_control::findOrFail($id);

        $pesoC->date_v = $request->date_v;
        $pesoC->animalCode_id = $request->animalCode_id;
        $pesoC->weigtht = $request->weigtht;
        $pesoC->date_vr = $request->date_vr;
        $pesoC->save(); 
            //return redirect()->route();
        return redirect('/controlPeso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesoC = Weigth_control::findOrFail($id);
        $pesoC->delete();
        return redirect('/controlPeso')->with('eliminar','ok'); 
    }
}