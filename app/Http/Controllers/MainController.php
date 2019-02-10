<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function getHotel(Request $request)
    {
    	$arrayName = array(
    		[
    			'id' =>  '1',
    			'nama' => 'ciwidey',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '2',
    			'nama' => 'Lembang',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '3',
    			'nama' => 'Alun-alun',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '4',
    			'nama' => 'Skywalk',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '5',
    			'nama' => 'ciwidey',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '6',
    			'nama' => 'BEC',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		]
    	);
    	return response([
			'status' => 'success',
			'data' => $arrayName
		]);
    }
    public function getRestaurant(Request $request)
    {
    	$arrayName = array(
    		[
    			'id' =>  '1',
    			'nama' => 'Budjangan',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '2',
    			'nama' => 'Wingsman',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '3',
    			'nama' => 'Burger King',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '4',
    			'nama' => 'Nasgor Mawut',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '5',
    			'nama' => 'Ayam Gazebo',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '6',
    			'nama' => 'Baso Ikan',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		]
    	);
    	return response([
			'status' => 'success',
			'data' => $arrayName
		]);
    }
}
