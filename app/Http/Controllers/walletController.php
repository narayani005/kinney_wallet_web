<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\User;

class walletController extends Controller
{
    function all_wallet(){
        //$data = Wallet::all();
        $data = DB::table('wallets')
        ->join('users', 'users.id', "=", 'wallets.user_id')
        ->get();
        //return $data;
        return view('kinney_wallet.wallet', ['datas' => $data]);
    }

    function all_user(){
        $data = User::all();
        return view('kinney_wallet.users', ['datas' => $data]);
    }

    function myprofile(){
        //$session_id = 1;
        $id = auth()->user()->id;
        $data = User::find($id);
        return view('kinney_wallet.myprofile', ['data' => $data]);
    }
    function mywallet(){
        $id = auth()->user()->id;
        $data = DB::table('wallets')
        ->join('users', 'users.id', "=" ,'wallets.user_id')
        ->select('users.name', 'wallets.user_id', 'wallets.admin_id', 'wallets.score','wallets.status', 'wallets.updated_at')
        ->where('user_id', $id)
        ->get();
        //return $user;
        return view('kinney_wallet.mywallet', ['datas' => $data]);
    }

    function add_wallet(){
        $data = User::all();
        return view('kinney_wallet.add_wallet', ['datas' => $data]);
    }

    function user_submit(Request $res){
        $user = new User;
        $user->name = $res->name;
        $user->email = $res->email;
        $user->password = $res->password;
        $user->is_admin = $res->role;
        $user->save();
        return redirect('/users');
    }
    function update_user(Request $res){
        $user = User::find($res->id);
        $user->name = $res->name;
        $user->email = $res->email;
        $user->password = $res->password;
        $user->is_admin = $res->role;
        $user->update();
        return redirect('/users');
    }

    public function add_wallet_data(Request $res){
        $wallet =  new Wallet;
        $wallet->user_id = $res->user_id;
        $wallet->admin_id = $res->admin_id;
        $wallet->score = $res->score;
        $wallet->status = $res->status;
        $wallet->save();
        return redirect('/wallet');
    }

    function edit_profile($id){
        $data = User::find($id);
        return view('kinney_wallet.edit_profile', ['data' => $data] );
    }
    function delete_profile($id){
        $data = User::find($id);
        $data ->delete();
        return redirect('/users');
    }
    
    function edit_wallet($id){
        //$data = Wallet::find($id);
        $data = DB::table('wallets')
        ->join('users', 'users.id', "=", 'wallets.user_id')
        ->where('wallets.wallet_id', $id)
        ->first();
        //return $data;
        return view('kinney_wallet.edit_wallet', ['data' => $data]);
    }
     function update_wallet(Request $res){
        
        $wallet = Wallet::where('wallet_id', $res->wallet_id)->first();
        $wallet->score = $res->score;
        $wallet->status = $res->status;
        $wallet->update();
        return redirect('/wallet');
    }

    function delete_wallet($id){
        $data = Wallet::find($id);
        $data->delete();
        return redirect('/wallet');
    }
}
