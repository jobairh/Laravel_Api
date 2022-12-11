<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return UsersModel::all();
    }

    public function store(){

        request()->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);


        return UsersModel::create([
            'first_name'=> request('first_name'),
            'last_name'=> request('last_name'),
            'email'=> request('email'),
        ]);
    }

    public function update(Id $id){

        request()->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);


        $success = $id->update([

            'first_name'=> request('first_name'),
            'last_name'=> request('last_name'),
            'email'=> request('email'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Id $id){

        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
