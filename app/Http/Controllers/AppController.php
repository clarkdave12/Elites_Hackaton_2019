<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
