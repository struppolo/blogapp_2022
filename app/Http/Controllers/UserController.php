<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   
    public function create(){
     return view('users.create');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
      $id = DB::table('users')->insertGetId([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
       ]);
       return redirect()->route('users.index');
    }
    public function index(){
        $users = DB::table('users')
                    ->orderBy('name', 'asc')
                    ->get();
    return view('users.index', ['users'=>$users]);
    }
    public function show($id){
    $user = DB::table('users')->find($id);
    dd($user);
    }
    public function delete($id){
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/user');
    }
    public function edit($id){
        $user = DB::table('users')->find($id);
        return view('users.edit',['user'=>$user]);
    }
    public function update(Request $request,$id){
    DB::table('users')
        ->where('id', $id)
        ->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
        ]);
        return redirect()->route('users.index');
    }  
}
