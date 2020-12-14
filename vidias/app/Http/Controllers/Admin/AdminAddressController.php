<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;
use App\Models\Province;
use Illuminate\Support\Str;

class AdminAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::where('active','=','yes')->get();
        return view('admin/addresses/index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('active','=','yes')->get();
        $provinces = Province::where('active','=','yes')->get();
        return view('admin/addresses/create', compact('users','provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'street_name' => 'bail|required|max:255',
            'city' => 'bail|required|max:255',
            'country' => 'bail|required|max:255',
            'postal_code' => 'bail|required|max:255|min:6',
            'province_id' => 'bail|required',
            'user_id' => 'bail|required',
            'active' => 'required'
        ]);

        if(Address::create($valid)){
            session()->flash('success', 'Address was successfully created');
        } else {
            session()->flash('error', 'There was a problem creating the address');
        }

        return redirect('/admin/addresses');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address::where('active','=','yes')->where('id','=',$id)->first();
        $users = User::where('active','=','yes')->get();
        $provinces = Province::where('active','=','yes')->get();
        return view('admin/addresses/edit', compact('address','users','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
                    'id' => 'bail|required|integer',
                    'user_id' => 'bail|required|integer',
                    'street_name' => 'bail|required|max:255',
                    'city' => 'bail|required|max:255',
                    'country' => 'bail|required|max:255',
                    'postal_code' => 'bail|required|max:255|min:6',
                    'province_id' => 'bail|required|integer',
                    'active' => 'required'
        ]);

        $new_address = Address::find($valid['id']);

        if($new_address->update($valid)){
            session()->flash('success', 'Address was successfully edited');
        } else {
            session()->flash('error', 'There was a problem editing the address');
        }

        return redirect('/admin/addresses');
    }
}
