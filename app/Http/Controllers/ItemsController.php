<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    // Item::
    //
    public function index()
    {
        return view('item');
    }

    public function store(Request $request)
    {
        // $Commodity = $request->all();
        // dd($Commodity);
        $data = Item::firstOrnew(['Commodityname' => $request->Commodityname]);
        ($data);
        if($data->exists){

        }else{
            $data->CommodityName = $request-> CommodityName;
            $data->CommodityPrice = $request-> CommodityPrice;
            $data->CommodityStocks = $request-> CommodityStocks;
            // dd($data);
            $data->save();
        }
        return view('item');
    }
}

