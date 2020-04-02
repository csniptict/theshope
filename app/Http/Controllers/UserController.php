<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class UserController extends Controller
{
    function index(){
       // $tmp = ['adas','sok','sao','dara'];
        $tmp = [
            ['name'=>'sok','age'=>20],
            ['name'=>'sao','age'=>20]
        ];
        //return Product::all();
        return view('user.index',['users'=>$tmp]);
    }

    function addForm(){
        return view('user.add');
    }
}
