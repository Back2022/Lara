<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index(\Illuminate\Http\Request $req, \Illuminate\Http\Response $response,  )
    {
        $users = DB::select('select * from users where email_verified_at IS NOT NULL OR 11 = ?', [1]);
 
        return view('user.index', [
            'users' => $users
                , 'req'=>$req
                , 'response'=>$response]);
    }
}
