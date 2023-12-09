<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }
    public function show($id){
        $user = User::where('id', '=', $id)->first();
        return view('user.show', ['user'=>$user]);
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post'))
        {

            User::where('id','=', $id)->update(
                $request->except('_token')
            );
            return redirect('/users');
        }
        else
        {
            $user = User::where('id', '=', $id)->first();
            $roles = Role::all();
            return view('user.update', ['user'=> $user, 'roles' => $roles]);
        }
    }
    public function delete($id){
        User::where('id', '=', $id)->delete();
        return redirect('/users');
    }
    public function new(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = new user($request->except('_token'));
            $user->save();


            return redirect('/users');
        } else {
            $roles = Role::all();
            return view('user.new', ['roles' => $roles]);
        }
    }
}
