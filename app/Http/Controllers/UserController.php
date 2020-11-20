<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function dameUsuarios(){
        $usuarios = DB::table("users as u")
            ->leftjoin("user_domicilio as ud", "u.id","=","ud.id_user")
            ->select("u.*","ud.*",DB::raw("YEAR(CURDATE())-YEAR(u.fecha_nacimiento) AS edad"))
            ->get();
        return response()
            ->json($usuarios);
    }
}
