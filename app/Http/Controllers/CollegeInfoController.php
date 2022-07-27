<?php

namespace App\Http\Controllers;
use App\CollegeInfo;
use App\Student;
use App\Faculty;
use App\Batch;
use App\Semester;

use Illuminate\Http\Request;

class CollegeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collegeinfos =CollegeInfo::all();
        return view('collegeinfo.index',compact('collegeinfos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCollegeInfo($id)
    {
        $student = Student::find($id);
        $faculties = Faculty::select('id','faculty_name','faculty_code')->get();
        $batches = Batch::select('id','batch_name','batch_year')->get();
        $semesters = Semester::select('id','semester_name')->get();
        return view ('collegeinfo.create',compact('id','student','faculties','batches','semesters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tureg_number=$request->get('tureg_name');
        $symbol_number=$request->get('symbol_number'); 
        try{
            CollegeInfo::create([
                'tureg_number'=>$tureg_number,
                'symbol_number'=>$symbol_number,
                
            ]);
    
            return redirect()->route('collegeinfos.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
