<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){
       return $data = DB::table('users')
       ->join('user_domicilios', 'users.id', '=', 'user_domicilios.user_id')
       ->select('users.name', 'users.email', 'users.fecha_nacimiento', 'user_domicilios.ciudad', 'user_domicilios.colonia','user_domicilios.domicilio')
       ->get();
    }
}
