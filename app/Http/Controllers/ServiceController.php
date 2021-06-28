<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request){
        $id_seller = "1";
        $service = new Service();

        $service->name = $request->name;
        $service->lowest_price = $request->lowest_price;
        $service->avaibility = $request->avaibility;
        $service->name = $request->name;
        $service->name = $request->name;
        $service->name = $request->name;
        $service->name = $request->name;
        $service->name = $request->name;

        $service->save();
        
    }
}
