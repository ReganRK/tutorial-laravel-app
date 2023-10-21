<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($id){
        //* eloquent orm
        //* query builder
        //* raw query

        return view('product', [
            'id' => $id
        ]);
    }
}
