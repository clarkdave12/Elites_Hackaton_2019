<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Referal;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test () 
    {
       return DB::table('users')
                ->join('referals', 'users.id', '=', 'referals.code_owner')
                ->join('insentives', 'referals.code', '=', 'insentives.code')
                ->get();
    }

    public function register (Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->licensed = 'no';
        $user->referal_code = $request->referal;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['success', 'Registered'], 200);
    }

    public function recruits($id)
    {

        $recruits = DB::table('referals')
                    ->where('code_owner', $id)
                    ->get();

        return $recruits;
    }

    public function recruitName($id)
    {
        return User::find($id);
    }
}
