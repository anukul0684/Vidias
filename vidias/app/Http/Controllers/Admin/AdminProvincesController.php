<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use Illuminate\Support\Str;

class AdminProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::where('active','=','yes')->get();  
        return view('admin/province/index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/province/create');
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
            'province_name' => 'bail|required|max:255',
            'province_gst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_pst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_hst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_qst' => 'bail|required|regex:/^\d[\.\d{2}]?/'
        ]);

        if(Province::create($valid)){
            session()->flash('success', 'Data inserted in the Provinces table');
        }else{
            session()->flash('error', 'Error while inserting data into database');
        }

        return redirect('/admin/provinces');
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
        $province = Province::find($id);
        return view('admin/province/edit', compact('province'));
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
        $province = Province::find($id);
        $valid = $request->validate([
            'province_name' => 'bail|required|max:255',
            'province_gst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_pst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_hst' => 'bail|required|regex:/^\d[\.\d{2}]?/',
            'province_qst' => 'bail|required|regex:/^\d[\.\d{2}]?/'
        ]);

        if($province->update($valid)){
            session()->flash('success', 'Data inserted in the Provinces table');
        }else{
            session()->flash('error', 'Error while inserting data into database');
        }

        return redirect('/admin/provinces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::find($id)->delete();
        $provinces = Province::latest()->get();
        return view('admin/province/index',compact('provinces'));
    }
}
