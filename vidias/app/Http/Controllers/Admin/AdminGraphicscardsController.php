<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Graphicscard;
use Illuminate\Support\Str;

class AdminGraphicscardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphicscards = Graphicscard::where('active','=','yes')->orderby('id')->get();
        return view('admin/graphicscard/index',compact('graphicscards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/graphicscard/create');
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
            'graphicscard_name' => 'bail|required|string',
            'active' => 'bail|required|string',
            'graphicscard_price' => 'bail|required|numeric'
        ]);

        // dd($valid["graphicscard_name"]);
        $valid["slug"] = Str::slug($valid["graphicscard_name"],"-");
        

        if(Graphicscard::create($valid)){
            session()->flash('success','Added Graphicscard');
        }else{
            session()->flash('error','Error while adding Graphicscard into database');
        }

        return redirect('admin/graphicscards/');

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
        $graphicscard = Graphicscard::find($id);

        return view('admin/graphicscard/edit',compact('graphicscard'));
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
        $graphicscard = Graphicscard::find($id);
        $valid = $request->validate([
            'graphicscard_name' => 'bail|required|string',
            'graphicscard_price' => 'bail|required|numeric',
            'active' => 'bail|required|string'
        ]);

        $valid['slug'] = Str::slug($valid['graphicscard_name'],'-');
        $valid['graphicscard_price'] = doubleval($valid['graphicscard_price']);
        
        if($graphicscard->update($valid)){
            session()->flash('success','Graphicscard data updated successfully');
        }else{
            session()->flash('error','Error while updating graphicscard updated');
        }

        return redirect('admin/graphicscards/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $graphicscard = Graphicscard::find($id)->delete();
        return redirect('/admin/graphicscards');
    }
}
