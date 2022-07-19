<?php

namespace App\Http\Controllers;

use App\Faculty;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties= Faculty::all();
        return view('faculty.index',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty_name=$request->get('faculty_name');
        $faculty_code=$request->get('faculty_code');

        try{
            Faculty::create([
                'faculty_code'=>$faculty_code,
                'faculty_name'=>$faculty_name,
                'is_active'=>true,
            ]);
            return redirect()->route('faculties.index');
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
        $faculty =Faculty::find($id);
        return view ('faculty.show',compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty=Faculty::find($id);
        return view ('faculty.edit',compact('faculty'));
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
        $faculty=Faculty::find($id);

        $faculty_name=$request->get('faculty_name');
        $faculty_code=$request->get('faculty_code');


        $faculty['faculty_name']=$faculty_name;
        $faculty['faculty_code']=$faculty_code;

        $faculty->update();
        return redirect()->route('faculties.show',$id);


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
