<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laptop;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Processor;
use App\Models\Ram;
use App\Models\Graphicscard;

class AdminLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::orderby('id')
                   ->with('brand')
                   ->with('processor')
                   ->with('graphicscard')
                   ->with('comments')
                   ->with('order_details')
                   ->with('images')
                   ->where('active','=','yes')
                   ->get();
        return view('admin/laptop/index',compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $screenresolutions = ['1200 x 1920', 
                              '1366 x 768', 
                              '1920 x 1080', 
                              '2560 x 1440', 
                              '2560 x 1600', 
                              '3840 x 2160'];
        $screensizes = ['12', '13', '14', '15', '16', '17'];
        $usbtypes = ['2.0', '3.0'];
        $brands = Brand::orderby('id')->get();
        $processors = Processor::orderby('id')->get();
        $graphicscards = Graphicscard::orderby('id')->get();
        $rams = Ram::orderBy('id')->get();
        return view('admin/laptop/create',compact('brands','processors','graphicscards','screenresolutions','screensizes','usbtypes','rams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('here');
        // dd($request);
        $valid = $request->validate([
            'laptop_name' => 'bail|required|max:255',
            'laptop_description' => 'bail|required|string',
            'brand_id' => 'bail|required|integer',
            'processor_id' => 'bail|required|integer',
            'graphicscard_id' => 'bail|required|integer',
            'ram_id' => 'bail|required|integer',
            'touch_screen' => 'bail|required|string',
            'screen_resolution' => 'bail|required|string',
            'screen_size' => 'bail|required|string',
            'usb_type' => 'bail|required|string',
            'active' => 'bail|required|string',
            'price' => 'bail|required|regex:/^\d[\.\d{2}]?/'
        ]);

        
        // dd($valid);

        if(Laptop::create($valid)){
            session()->flash('success', 'Data inserted in the Laptop table');
        }else{
            session()->flash('error', 'Error while inserting data into database');
        }

        
        return redirect('admin/laptops/');
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
        $laptop = Laptop::find($id);
        $screenresolutions = ['1200 x 1920', 
                              '1366 x 768', 
                              '1920 x 1080', 
                              '2560 x 1440', 
                              '2560 x 1600', 
                              '3840 x 2160'];
        $screensizes = ['12', '13', '14', '15', '16', '17'];
        $usbtypes = ['2.0', '3.0'];
        $brands = Brand::orderby('id')->get();
        $processors = Processor::orderby('id')->get();
        $graphicscards = Graphicscard::orderby('id')->get();
        $rams = Ram::orderBy('id')->get();
        return view('admin/laptop/edit',compact('laptop','brands','processors','graphicscards','screenresolutions','screensizes','usbtypes','rams'));
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
        $laptop = Laptop::find($id);
        $valid = $request->validate([
            'laptop_name' => 'bail|required|max:255',
            'laptop_description' => 'bail|required|string',
            'brand_id' => 'bail|required|integer',
            'processor_id' => 'bail|required|integer',
            'graphicscard_id' => 'bail|required|integer',
            'ram_id' => 'bail|required|integer',
            'touch_screen' => 'bail|required|string',
            'screen_resolution' => 'bail|required|string',
            'screen_size' => 'bail|required|string',
            'usb_type' => 'bail|required|string',
            'active' => 'bail|required|string',
            'price' => 'bail|required|regex:/^\d[\.\d{2}]?/'
        ]);

        
        if($laptop->update($valid)){
            session()->flash('success', 'Data updated in laptop table');
        }else{
            session()->flash('error','Error While Updating data into database');
        }

        return redirect('/admin/laptops/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $laptop = Laptop::find($id)->delete();
        $laptops = Laptop::orderby('id')
                          ->with('brand')
                          ->with('processor')
                          ->with('graphicscard')
                          ->with('comments')
                          ->with('order_details')
                          ->with('images')
                          ->get();
        return view('admin/laptop/index',compact('laptops'));
    }
}
