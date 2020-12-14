<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    //

    public function index()
    {
        if(\Auth::user()) {
            
            $userDetails=User::where('id','=',\Auth::user()->id)
                                ->first();
            $addresses=Address::orderBy('id')
                            ->where('user_id','=',\Auth::user()->id)
                            ->get();
            
            $title = 'Profile';
            return view('profile',compact('title','userDetails','addresses'));
        }
        session()->flash('error','Please login to view your profile.');
        return redirect('/login');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $userDetails=User::where('id','=',\Auth::user()->id)
                                ->first();       

        $valid = $request->validate([
            'name' => 'bail|required|string',
            'first_name' => 'bail|required|string',
            'last_name' => 'bail|required|string',
            'email' => 'bail|required|string',
            'mobile_number' => 'bail|nullable|string',            
            'user_image' => 'nullable|image'         
        ]);
        //dd($valid);
        if($request->file('user_image')) {

            $orig_name = $request->file('user_image')->getClientOriginalName();
            $new_name = Str::slug(now(),'-') . '_' . $orig_name;
            
            $request->file('user_image')->storeAs('public/images',$new_name);  
        
            $valid['user_image'] = $new_name;
            
        }        
        
        if($userDetails->update($valid)) {
            session()->flash('success','Your profile was successfully updated');
        } else {
            session()->flash('error','Some issue occurred in updating your profile. Please try again');
        }      
        
        return redirect('/profile');
    }

}
