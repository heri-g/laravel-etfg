<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


class IpAddressesController extends Controller
{
    public function index()
        {
            $addresses = DB::select('select * from ip_addresses');
            return response()->json($addresses);

        }
}