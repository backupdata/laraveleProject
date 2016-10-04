<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Hash;
use Auth;
use Crypt;
use Validator;
use Session;
use Redirect;

class loginAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       return view('adminLogin');  //
    }

    public function adminHomeScreen()
    {
        return view('adminHome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function foo(Request $request)
     {
        $user = array("email"=>$request->email,"password"=>$request->password);
       // echo ;
        //echo $request->password;
        $hashed = Hash::make($request->password);
        $bscript = bcrypt($hashed);
        //echo $bscript;
       $md5 =  md5($request->password);
      // echo $md5;

     $validate_admin = DB::table('admintab') 
                            ->select('email','password','name') 
                            ->where('email', $request->email)
                            ->first();
        if($validate_admin->password == md5($request->password)){
             Session::put('name',$validate_admin->name);
            return view('adminHome'); 
            // return redirect('/adminHome'); 
            //return Redirect::to('/adminHome');
        }
     }
 

public function loginData() {
    // Getting all post data
    $data = Input::all();
    // Applying validation rules.

    $rules = array(
        'email' => 'required|email',
        'password' => 'required|min:6',
         );
    $validator = Validator::make($data, $rules);
    if ($validator->fails()){
      // If validation falis redirect back to login.
      return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($validator);
    }
    else {
      $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
          );
      $pasword = Input::get('password');
      $HasPassword = Hash::make($pasword);
    $encriptPassword = bcrypt($pasword);

       echo $HasPassword,"<br>";
    
    
      // doing login.
     $validate_admin = DB::table('admintab')
                            ->select('email','password')
                            ->where('email', Input::get('email'))
                            ->first();
                          

    echo $FetchPassword = $validate_admin->password;

        if($FetchPassword==$HasPassword){
            echo "if statement";
        }else{
            echo "else statement";
        }
      // else {
      //   // if any error send back with message.
      //   Session::flash('error', 'Something went wrong'); 
      //   return Redirect::to('login');
      // }
    }
  }






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
