<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PopularCourses;

class PopularCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PopularCourses $model)
    {
         $pcourses= PopularCourses::get();

        return view('popularcourses', ['pcourses' => $model->paginate(15)]);

    }



    public function home(PopularCourses $model)
    {
         $pcourses= PopularCourses::get();

        return view('index', ['pcourses' => $model->paginate(15)]);

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
       $rules = [
            
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator, 422);
        } else {


             if ($request->hasFile('image')){
     $file = $request->file('image');
    $extension = $file->getClientOriginalExtension(); // you can also use file name
    $fileName =  $request->input('course_name').'.'.$extension;  
    $path = public_path().'/storage/images';
    $uplaod3= $file->move($path,$fileName);

       
 }






            $adm = new PopularCourses;



            $adm->course_name = $request->input('course_name');
            $adm->category = $request->input('category');
            $adm->image =  $fileName;
            $adm->description = $request->input('description');
            $adm->status = $request->input('status');
        

       

            try {
                $adm->save();

                return back()->with('success','New Popular Course Recorded succesfuly!');
                        
            } catch (\Illuminate\Database\QueryException $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
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
