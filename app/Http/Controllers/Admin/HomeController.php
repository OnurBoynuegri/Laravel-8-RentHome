<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $dataList = House::all();
        return view('admin.house', ['dataList' => $dataList]);
    }
}
