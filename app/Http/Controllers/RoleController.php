<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('role.index', ['roles'=>$roles]);
    }

    public function show($id){
        $role = role::where('id', '=', $id)->first();
        return view('role.show', ['role'=>$role]);
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post'))
        {
            role::where('id','=', $id)->update([
                'name' => $request->name,
                'code' => $request->code,
            ]);
            return redirect('/roles');
        }
        else
        {
            $role = role::where('id', '=', $id)->first();
            return view('role.update', ['role'=> $role]);

        }
    }

    public function delete($id){
        role::where('id', '=', $id)->delete();
        return redirect('/roles');
    }

    public function new(Request $request){
        if ($request->isMethod('post') ) {
            $role = new role();
            $role->name = $request->name;
            $role->code = $request->code;
            $role->save();
            return redirect('/roles');
        } else {
            return view('role.new');
        }

    }
}
