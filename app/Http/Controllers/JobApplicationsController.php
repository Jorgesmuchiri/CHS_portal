<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\User;
use App\Applications;

class JobApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user = User::whereEmail(request('email'))->first();

      if ($request->query('search')) {
            $search = $request->query('search');
           $jobs= Applications::where('id', 'LIKE', "%{$search}%")->get();
        } else {
           $jobs= Jobs::orderBy('id', 'DESC')->get();
        }
        return view('ViewJobs',['jobs' => $jobs,'user' => $user]);

        
    }



public function apply($id){


$jobs = Jobs::where('id','=',$id)->get();
$users = User::whereEmail(request('email'))->first();


return view('applyjob',['jobs' => $jobs,'users' => $users]);



 

}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

            
               

  try {
               $request->status='Pending for approval';
              Applications::create($request->all());
            return back()->withSuccess('Job Applied successfully');
            } catch (\Illuminate\Database\QueryException $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }

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
