<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {

        $address = Cache::remember('home_address', now()->addMinutes(5), function () {
            return Address::orderBy('id', 'desc')->limit(10)->get();
        });

        return view('home', compact('address'));
    }
}
