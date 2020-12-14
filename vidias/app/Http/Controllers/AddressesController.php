<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Str;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()) {
            $addresses = Address::where('active','=','yes')
                                ->orderBy('id')
                                ->with('user')
                                ->with('province')
                                ->where('user_id','=',\Auth::user()->id)
                                ->get();

            $title = 'Addresses'; //dd($addresses->user_name);
            return view('addresses/index',compact('title','addresses'));
        }
        session()->flash('error','Please login to view your address.');
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Auth::user()) {
            $provinces = Province::orderBy('created_at')->where('active','=','yes')->take(13)->get();
            //dd($provinces->isEmpty());
            //dd($provinces);
            
            return view('addresses/create',compact('provinces'));
        }
        else{
            session()->flash('error','Please login to add your new address.');
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\Auth::user()) {
            //dd($request->choose);

            $request->validate([
                'street_name' => 'bail|required|max:255',
                'city' => 'bail|required|max:255',
                'country' => 'bail|required|max:255',
                'postal_code' => 'bail|required|max:255|min:6',
                'province_id' => 'bail|required',
                'province_name' => 'bail|required|max:255'
            ]);//dd(gettype($valid));

            $valid['street_name']=$request->street_name;
            $valid['city']=$request->city;
            if($request->country=="Please enter country"){
                $valid['country']="Canada";
            }
            $valid['postal_code']=$request->postal_code;
            $valid['province_id']=$request->province_id;
            //dd(gettype($valid));

            $valid['user_id'] = \Auth::user()->id;
            $valid['active'] = 'yes';
            
            // The option choosing outside of Canada
            if ($request->province_id == 0) {
                $valid['country']=$request->country;

                //check if the province entered exists in database 
                $check = Province::where('province_name','=',$request->province_name)->first();

                // province exist in databse
                if($check){
                    // take out the province id
                    $valid['province_id']=$check->id;
                }
                // province does not exist in databse
                else{
                    // create a new province
                    $province['province_name'] = $request->province_name;
                    $province['province_gst'] = 0;
                    $province['province_pst'] = 0;
                    $province['province_hst'] = 0;
                    $province['province_qst'] = 0;
                    Province::create($province);

                    // take out the new province id
                    $province = Province::orderBy('created_at','DESC')->where('active','=','yes')->take(1)->first();
                    $valid['province_id']=$province->id;
                }
            }
            
            if(Address::create($valid)){
                session()->flash('success', 'Address was successfully created');
            } else {
                session()->flash('error', 'There was a problem creating the address');
            }

            return redirect('/address');
        }
        else{
            session()->flash('error','Please login to add your new address.');
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(\Auth::user()) {
            $provinces = Province::orderBy('created_at')->where('active','=','yes')->take(13)->get();

            $address = Address::where('active','=','yes')
                                ->with('user')
                                ->with('province')
                                ->where('user_id','=',\Auth::user()->id)
                                ->where('id','=',$id)
                                ->first();
            if($address->province_id > 13){
                $out_side = 1;
            }
            else{
                $out_side = 0;
            }

            return view('addresses/edit',compact('provinces','address','out_side'));
        }
        else{
            session()->flash('error','Please login to add your new address.');
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   if(\Auth::user()){
            $request->validate([
                    'id' => 'bail|required|integer',
                    'street_name' => 'bail|required|max:255',
                    'city' => 'bail|required|max:255',
                    'country' => 'bail|required|max:255',
                    'postal_code' => 'bail|required|max:255|min:6',
                    'province_id' => 'bail|required|integer',
                    'province_name' => 'bail|required|max:255'
            ]);
 
            $valid['id']=$request->id;
            $valid['street_name']=$request->street_name;
            $valid['city']=$request->city;
            $valid['country']=$request->country;
            $valid['postal_code']=$request->postal_code;
            $valid['province_id']=$request->province_id;

            $valid['user_id'] = \Auth::user()->id;
            $valid['active'] = 'yes';
            
            // choosing outside of Canada
            if ($request->province_id == 0) {
                    //check if the province entered exists in database 
                    $check = Province::where('province_name','=',$request->province_name)->first();

                    // province exist in databse
                    if($check){
                        // take out the province id
                        $valid['province_id']=$check->id;
                    }
                    // province does not exist in databse
                    else{
                        // create a new province
                        $province['province_name'] = $request->province_name;
                        $province['province_gst'] = 0;
                        $province['province_pst'] = 0;
                        $province['province_hst'] = 0;
                        $province['province_qst'] = 0;
                        Province::create($province);

                        // take out the new province id
                        $province = Province::orderBy('created_at','DESC')->where('active','=','yes')->take(1)->first();         
                        $valid['province_id']=$province->id;
                    }
            }
            
            if(Address::find($valid['id'])->update($valid)){
                    session()->flash('success', 'Address was successfully updated');
            } else {
                    session()->flash('error', 'There was a problem updating the address');
            }

            return redirect('/address');
        }
        else{
            session()->flash('error','Please login to edit your new address.');
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
}
