<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request){
        $id_seller = "1";
        $service = new Service();

        $service->seller_id = $id_seller;
        $service->service_name = $request->service_name;
        $service->lowest_price = $request->lowest_price;
        $service->available = $request->available;
        $service->description = $request->description;

        $service->save();

        return dump($service);
        
    }

    

    public function form_create(Request $request){
        return view('form_service');
    }
}
