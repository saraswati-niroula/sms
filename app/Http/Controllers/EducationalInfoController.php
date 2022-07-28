<?php

namespace App\Http\Controllers;

use App\EducationInfo;
use App\Student;
use Illuminate\Http\Request;

class EducationalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eduinfos =EducationInfo::all();
        dd($eduinfos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEducationInfo($id)
    {
        $student = Student::find($id);
        return view ('eduinfo.create',compact('id','student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_id=$request->get('student_id');
        $board=$request->get('board'); 
        $institute_name=$request->get('institute_name');
        $symbol_number=$request->get('symbol_number');
        $passed_year=$request->get('passed_year');
        $per_cgpa=$request->get('per_cgpa');
      
        
        try{
        EducationInfo::create([
            'student_id'=>$student_id,
            'board'=>$board,
            'institute_name'=>$institute_name,
            'symbol_number'=>$symbol_number,
            'passed_year'=>$passed_year,
            'per_cgpa'=>$per_cgpa
          
        ]);

        return redirect()->route('eduinfos.index');
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
        $student = Student::find($id);
        $education_infos = EducationInfo::where('student_id',$id)->get();
        // dd($education_infos);
        return view('eduinfo.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student =EducationInfo::find($id);
        $student_info=Student::find($student->student_id);
        // dd($student,$student_info);;
        return view ('eduinfo.edit',compact('student','student_info'));
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
        $student =EducationInfo::find($id);
        $student_id=$request->get('student_id');
        $board=$request->get('board'); 
        $institute_name=$request->get('institute_name');
        $symbol_number=$request->get('symbol_number');
        $passed_year=$request->get('passed_year');
        $per_cgpa=$request->get('per_cgpa');



        $student['student_id'] = $student_id;
        $student['board'] = $board;
        $student['institute_name'] = $institute_name;
        $student['symbol_number'] = $symbol_number;
        $student['passed_year'] = $passed_year;
        $student['per_cgpa'] = $per_cgpa;
        
        $student->update();
        return redirect()->route('eduinfos.show',$id);
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
