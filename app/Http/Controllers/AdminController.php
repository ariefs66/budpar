<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
class AdminController extends Controller
{

     public function getTableHotel(){
        $data['hotel'] = Hotel::all();
        return view('admin.hotel.index',$data);
    }

    public function addForm(){
        return view('admin.hotel.add');
    }
}
