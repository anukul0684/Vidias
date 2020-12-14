<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;

class AdminBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('active','=','yes')->get();  
        return view('admin/brand/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/brand/create');
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
            'brand_name' => 'bail|required|max:255',
            'active' => 'required'
        ]);

        $new_brand = Brand::create($valid);

        if($new_brand){
            session()->flash('success', 'Brand was successfully created');
        } else {
            session()->flash('error', 'There was a problem creating the brand');
        }

        return redirect('/admin/brands');
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
        $brand = Brand::find($id);
        return view('admin/brand/edit', compact('brand'));
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
            'brand_name' => 'bail|required|max:255',
            'active' => 'required'
        ]);

        $new_brand = Brand::find($valid['id']);
        $new_brand->update($valid);

        if($new_brand){
            session()->flash('success', 'Brand was successfully edited');
        } else {
            session()->flash('error', 'There was a problem editing the brand');
        }

        return redirect('/admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_brand = Brand::find($id);
        $del_brand->delete();

        session()->flash('success', 'Brand was successfully deleted');
        return redirect('/admin/brands');
    }
}
