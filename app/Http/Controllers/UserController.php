<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $sales = Sale::paginate(10);
        return view('index',compact('sales'));
    }
}
