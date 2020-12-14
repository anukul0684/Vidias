<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('active','=','yes')->get();
        return view('admin/users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
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
            'first_name' => 'bail|required|string|max:255',
            'last_name' => 'bail|required|string|max:255',
            'user_image' => 'bail|required|regex:/[a-zA-Z]{1,}[\.]{1}[j]{1}[p]{1}[g]{1}$/i',
            'mobile_number' => 'bail|required|regex:/^[0-9]{3}[-\s]?[0-9]{3}[-\s]?[0-9]{4}$/i',
            'email' => 'bail|required|email',
            'password' => 'bail|required|regex:/^[a-zA-Z0-9\-\_\.]{6,}$/',
            'is_admin' => 'required',
            'active' => 'required'
        ]);
        
        $var = boolval($valid['is_admin']);
        $valid['is_admin'] = $var;
        $valid['password'] = Hash::make($valid['password']);
        $new_user = User::create($valid);


        if($new_user){
            session()->flash('success', 'User was successfully created');
        } else {
            session()->flash('error', 'There was a problem creating the user');
        }

        return redirect('/admin/users');
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
        $user = User::find($id);
        return view('admin/users/edit', compact('user'));
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
            'first_name' => 'bail|required|string|max:255',
            'last_name' => 'bail|required|string|max:255',
            'user_image' => 'bail|required|regex:/[a-zA-Z]{1,}[\.]{1}[j]{1}[p]{1}[g]{1}$/i',
            'mobile_number' => 'bail|required|regex:/^[0-9]{3}[-\s]?[0-9]{3}[-\s]?[0-9]{4}$/i',
            'email' => 'bail|required|email',
            'password' => 'bail|required|regex:/^[a-zA-Z0-9\-\_\.]{6,}$/',
            'is_admin' => 'required',
            'active' => 'required'
        ]);
        
        $var = boolval($valid['is_admin']);
        $valid['is_admin'] = $var;
        $valid['password'] = Hash::make($valid['password']);
        $new_user = User::find($valid['id']);
        $new_user->update($valid);


        if($new_user){
            session()->flash('success', 'User was successfully edited');
        } else {
            session()->flash('error', 'There was a problem editing the user');
        }

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_user = User::find($id);
        $del_user->delete();

        session()->flash('success', 'User was successfully deleted');
        return redirect('/admin/users');
    }
}
