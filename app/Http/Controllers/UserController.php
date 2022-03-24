<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\User;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   public function login(Request $request)
   {

       // Check if a user with the specified email exists
        $user = User::whereEmail(request('email'))->first();

        $worker = Worker::where('email','=', request('email'))->first();
     

        if (! $user) {

            //flash('Wrong email or password')->error();
           return back()->withFail('Wrong email');
            

        }
        /*
         If a user with the email was found - check if the specified password
         belongs to this user
        */
        if (! \Hash::check(request('password'), $user->password)) {
           return back()->withFail('Wrong Password');
        }


        // Format the final response in a desirable format
        // return response()->json([
        //     'user' => $user,
        //     'status' => 200,
        // ]);

 
        if (!$worker ) {

            //flash('Wrong email or password')->error();
              return view('home',['user' => $user,'worker' => $worker]);
            

        }

        else{

           return view('home2',['user' => $user,'worker' => $worker]);


        }







   }
   
   
   
    public function adminlogin(Request $request)
   {

       
               $worker = User::join('workers','users.email','=', 'workers.email')->get();
        $worker =  $worker ->unique('email');


        return response()->json( $worker);



   }
   

  public function create(Request $request)
    {

      {
       $rules = [
           
       ];
       $validator = \Validator::make($request->all(), $rules);
       if ($validator->fails()) {
           return response()->json($validator, 422);
       } else {
           $user = new User;
            $user->name = $request->input('name');
           $user->email = $request->input('email');
           $user->role = $request->input('role');

        //   $user->role = "user";
           // $user->active = 1;
           $user->password = bcrypt($request->input('password'));
           //$user->remember_token = $request->input('remember_token');
           try {
            $user->save();
             return back()-> withSuccess('User created successfully');
            } catch (\Illuminate\Database\QueryException $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
   }
              

    }

}
