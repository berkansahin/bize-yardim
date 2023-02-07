<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Jobs\AddressJob;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AddressController extends Controller
{

    public function index()
    {
        $items = Address::paginate();

        return view('all', compact('items'));
    }

    public function show()
    {
        return view('address');
    }

    public function approve($id)
    {
        Address::where('id', $id)->update([
            'status' => 'approve'
        ]);

        Cache::forget('home_address');

        return redirect(route('addresses'));
    }

    public function store(AddressRequest $request)
    {
        $params = $request->validated();

        AddressJob::dispatch($params);

        return redirect(route('address'));
    }
}
