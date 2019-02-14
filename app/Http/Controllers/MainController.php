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
    			'nama' => 'Padma Hotel Bandung',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
                
    		],
    		[
    			'id' =>  '2',
    			'nama' => 'Amaris Hotel',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '3',
    			'nama' => 'Neo Hotel',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '4',
    			'nama' => 'Novotel Bandung',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '5',
    			'nama' => 'Hotel California',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '6',
    			'nama' => 'Papandayan Hotel',
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
