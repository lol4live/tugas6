<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MakananBController;

class MakananBController extends Controller
{
    @return Illuminate\Http\Response
    public function index (){
        $produk	=	MakananBController::all();
        return	view('menu_makananbasah')->with ('menu_makananbasah'	=>	$produk);
    }
}
