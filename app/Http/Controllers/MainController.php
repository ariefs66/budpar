<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;


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
    			'nama' => 'Bakso Budjangan',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '2',
    			'nama' => 'Sindang Reret Bandung',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '3',
    			'nama' => 'Kedai Dimsum',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '4',
    			'nama' => 'Nasgor Mafia',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '5',
    			'nama' => 'Soto Ayam Remba',
    			'lat' => 0.2123,
    			'lng' => 101.2131,
    			'price' => 500000,
    			'img' => 'ciwidey.jpeg',
    			'desc' => 'asdasdasfdsnkdgjkng'
    		],
    		[
    			'id' =>  '6',
    			'nama' => 'Sari Bundo',
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
    public function getDetailHotel($hotel)
    {
        // $query = $hotel;
        $data = array(
            
                'hotel' =>[
                    'id' =>  '1',
                    'nama' => 'Padma Hotel Bandung',
                    'alamat' => 'Jl. Rancabentang No.56-58, Ciumbuleuit, Cidadap, Kota Bandung, Jawa Barat 40142, Indonesia',
                    'fasilitas' => ['Freewifi','Kolam renang','Sarapan', 'Fitness'],
                    'lat' => 0.2123,
                    'lng' => 101.2131,
                    'star' => 4,
                    'img' => ['padma.jpg','padma.jpg','padma.jpg'],
                    'desc' => 'asdasdasfdsnkdgjkng' 
                ],
                'kamar' =>[
                    [
                        'id' => '1',
                        'nama' => 'Double / Twin Superior Room Only',
                        'tamu' => '2',
                        'sarapan' => 'ya',
                        'price' => 500000,
                    ],
                    [
                        'id' => '2',
                        'nama' => 'Family Room',
                        'tamu' => '4',
                        'sarapan' => 'ya',
                        'price' => 500000,
                    ],
                ]
            
        );
        // print_r($data);
        return view('pages.detail-hotel')->with('result',json_encode($data));
    }
    public function checkout(Request $request)
    {
        $hotel_id = $request->hotel;
        $startDate = $request->start;
        $endDate = $request->end;
        $night = $request->night;
        $room_id = $request->room_id;
        $price = 600000;
        $data = array( 
                'hotel' => 'Padma Hotel Bandung',
                'hotel_id' => $hotel_id,
                'room_id' => $room_id,
                'price' => $price * $night,
                'kamar' => 'Family Room',
                'tamu' => 2,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'night' => $night
        );
        return view('checkout')->with('result',json_encode($data));
    }
    public function insertOrder(Request $request)
    {
        $hotel_id = $request->hotel;
        $startDate = $request->start;
        $endDate = $request->end;
        $night = $request->night;
        $room_id = $request->room_id;
        $nama = $request->nama;
        $email = $request->email;
        $tlp = $request->tlp;
        $khusus = $request->khusus;
        $price = 600000;
        $order_id = 12312312;
        $data = array( 
                'order_id' => 213123,
                'hotel' => 'Padma Hotel Bandung',
                'hotel_id' => $hotel_id,
                'room_id' => $room_id,
                'price' => $price * $night,
                'kamar' => 'Family Room',
                'tamu' => 2,
                'startDate' => $startDate,
                'endDate' => $endDate
        );
        // return response($request->all());
        return response()->json([
            'order_id' => $order_id
        ]);
    }
    public function payment(Request $request)
    {
        $order_id = $request->order_id;
        $hotel_id = 1;
        $startDate = '2019-02-19';
        $endDate = '2019-02-21';
        $night = 3;
        $room_id = 1;
        $price = 600000;
        $data = array( 
                'hotel' => 'Padma Hotel Bandung',
                'hotel_id' => $hotel_id,
                'room_id' => $room_id,
                'price' => $price,
                'kamar' => 'Family Room',
                'tamu' => 2,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'night' => $night
        );
        return view('payment')->with('result',json_encode($data));
    }
    public function buy(Request $request)
    {
        $data = array( 
            'id' => 21312,
            'tgl' => '2019-02-19',
            'namarek' => 'BNI',
            'norek' => 0267655329,
            'nama' => 'Indra',
            'email' => 'indrahadi@gmail.com',
            'tlp' => '0821312314',
            'subtotal' => 1804000,
            'discount' => 1804000,
            'total' => 1804000
        );
        $result = array(
            [
                'item' => 'Padma Hotel',
                'qty' => 4,
                'desc' => 'Family room for 3 Person',
                'unitcost' => 400000,
                'total' => 4*400000
            ],
            [
                'item' => 'Ayam Geprek',
                'qty' => 12,
                'desc' => 'twice a day for 4 night',
                'unitcost' => 17000,
                'total' => 12*17000
            ]
        );

        Mail::to('rikza.mudhofar@gmail.com')->send(new OrderShipped($data,$result));
        return response()->json([
            'sucess' => 'email sent'
        ]);
        // return view('emails.OrderShipped')->with('data',$data)->with('result',$result);
    }
}
