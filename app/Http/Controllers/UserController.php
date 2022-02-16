<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
      
class UserController extends Controller
{
    
        /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
        $this->middleware('log')->only('index');
        $this->middleware('subscribed')->except('store');
        
        //Ovo je primjer MW koji je inline ( ne zahtjeva dodatni file)
        $this->middleware(function ($request, $next) {
         //   dd($request);
    return $next($request);
});
        
    }
    
        /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     * @example http://localhost:8000/user/profile/{1} u parametar upisi id usera
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
  //  public function index($param) {
    public function index() {
        echo "Hello from index method in UserController"; 

    }
      public function redirektajMeNaAdmin() {
        return redirect()->route('admin.dodaj');

    }  
      //  ova funkcija jedina nema middleware subscribed
    public function store() {
        echo "Hello from store method in UserController"; 

    }
    //
}
