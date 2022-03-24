<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admissions;



class AdmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Admissions $model)
    {


         $admissions= Admissions::get();

        return view('admissions-enquiry', ['admissions' => $model->paginate(15)]);


           
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
            $adm = new Admissions;
            $adm->fname = $request->input('fname');
            $adm->fname = $request->input('lname');
            $adm->fname = $request->input('middlename');
            $adm->phone_no = $request->input('phone_no');
            $adm->alt_phone = $request->input('alt_phone');
            $adm->email = $request->input('email');
            $adm->gender = $request->input('gender');
            $adm->course = $request->input('course');
            $adm->highest_qualification = $request->input('highest_qualification');
       

            try {
                $adm->save();
                        return back()->withSuccess('Thank you for submitting your details,one of our team members shall contact you shortly');
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
