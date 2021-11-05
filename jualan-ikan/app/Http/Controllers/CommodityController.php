<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index()
    {
        $data['komoditas'] = (object)[
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
            [
                'id' => 1,
                'nama'=> 'Ikan 1',
                'harga' => 1000,
            ],
        ];


        return view('pages.komoditas', $data);
    }
}
