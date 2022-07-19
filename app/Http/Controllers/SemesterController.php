<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters= Semester::all();
        //   dd($batches);
        return view('semester.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created_by=$request->get('created_by');
        $semester_name=$request->get('semester_name');

        try{
            Semester::create([
                'created_by'=>1,
                'semester_name'=>$semester_name,
                'is_active'=>true,
            ]);
            return redirect()->route('semesters.index');
        }
        catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semester=Semester::find($id);
        return view ('semester.show',compact('semester'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester=Semester::find($id);
        return view ('semester.edit',compact('semester'));
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
        $semester=Semester::find($id);

        $created_by=$request->get('created_by');
        $semester_name=$request->get('semester_name');


        $semester['semester_name'] = $semester_name;
        $semester['created_by'] =1;

        $semester->update();
        return redirect()->route('semesters.show',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
