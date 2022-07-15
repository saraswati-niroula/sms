<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from students
        $students =Student::all();
        // dd($students);
        return view('student.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $students =Student::all();
        return view ('student.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $name=$request->get('name');
        $email=$request->get('email'); 
        $phone=$request->get('phone');
        $picture=$request->get('picture');
        $dob=$request->get('dob');
        $gender=$request->get('gender');
        $citizenship=$request->get('citizenship');
        $blood_group=$request->get('blood_group');
        $p_address=$request->get('p_address');
        $t_address=$request->get('t_address');
        
        try{
        Student::create([
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$phone,
            'citizenship'=>$citizenship,
            'blood_group'=>$blood_group,
            'picture'=>$picture,
            'perm_address'=>$p_address,
            'temp_address'=>$t_address,
            'dob'=>$dob,
            'gender'=>$gender,
            'is_active'=>true,
            'is_almuni'=>false
        ]);

        return redirect()->route('student.index');
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
        $students =Student::all();
        return view ('student.show',compact('students'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student =Student::find($id);
        return view ('student.edit',compact('student'));

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
