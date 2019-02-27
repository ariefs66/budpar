<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Lingkupseni;
class AdminController extends Controller
{

     public function getTableHotel(){
        $data['hotel'] = Hotel::all();
        return view('admin.hotel.index',$data);
    }

    public function addForm(){
        return view('admin.hotel.add');
    }

    public function indexTraditionalArt(){
        $data['lingkup_seni'] = Lingkupseni::all();
        return view('admin.publicservice.traditionalart.index',$data);
    }
}
