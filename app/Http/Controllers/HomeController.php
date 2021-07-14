<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;
        $data = DB::table('wallets')
        ->where('user_id', $id)
        ->where('status', 'Credited')
        ->sum('score');;
        //return $data;
        return view('kinney_wallet.dashboard',['data' => $data]);
    }

    public function adminHome()
    {
        $id = auth()->user()->id;
        $data = DB::table('wallets')
        ->where('user_id', $id)
        ->where('status', 'Credited')
        ->sum('score');;
        //return $data;
        return view('kinney_wallet.dashboard',['data' => $data]);
    }
    
}
