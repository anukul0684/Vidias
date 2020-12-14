<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Str;

class AdminImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('active','=','yes')->orderBy('id')->with('laptop')->get();
        return view('admin/image/index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Image::orderBy('id')->with('laptop')->get();
        return view('admin/image/create', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $valid = $request->validate([
            'laptop_id' => 'bail|required|integer',
            'image_name' => 'nullable|image',
            'active' => 'bail|required|string'
        ]);

        // dd($valid);
         
        if($request->file('image_name')) {

            $orig_name = $request->file('image_name')->getClientOriginalName();
            $new_name = Str::slug(now(),'-') . '_' . $orig_name;
            
            $request->file('image_name')->storeAs('public/images',$new_name);  
        
            $valid['image_name'] = $new_name;
            //dd($valid['featured_image']);
        }

        $new_image = Image::create($valid);

        if($new_image){
            session()->flash('success', 'Image was added successfully!!!');
        } else {
            session()->flash('error', 'Please check the required fields and retry.');
        }

        return redirect('/admin/images');
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
        $image = Image::where('id','=',$id)
                    ->with('laptop')->first();
        return view('admin/image/edit', compact('image'));
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
        // dd($request);
        $valid = $request->validate([
            'id' => 'bail|required|integer',
            'laptop_id' => 'bail|required|integer',
            'image_name' => 'nullable|image',
            'active' => 'required'
        ]);

        // dd($valid);

        if($request->file('image_name')) {

            $orig_name = $request->file('image_name')->getClientOriginalName();
            $new_name = Str::slug(now(),'-') . '_' . $orig_name;
            
            $request->file('image_name')->storeAs('public/images',$new_name);  
        
            $valid['image_name'] = $new_name;
            //dd($valid['featured_image']);
        }

        $new_image = Image::find($valid['id']);
        $new_image->update($valid);

        if($new_image){
            session()->flash('success', 'Image was updated successfully!!!');
        } else {
            session()->flash('error', 'Please check the required fields and retry.');
        }

        return redirect('/admin/images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_image = Image::find($id);
        $del_image->delete();

        session()->flash('success', 'Image was successfully deleted');
        return redirect('/admin/images');
    }
}
