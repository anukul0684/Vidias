<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ram;
use Illuminate\Support\Str;

class AdminRamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rams = Ram::orderBy('id')->where('active','=','yes')->get();  
        return view('admin/ram/index', compact('rams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/ram/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid = $request->validate([
            'ram_size' => 'bail|required|max:255',
            'ram_price' => 'bail|required|regex:/^\d[\.\d{2}]?/', 
        ]);

        $valid['slug'] = Str::slug($valid['ram_size'],'-');
        $valid['active'] = 'yes';

        if(Ram::create($valid)){
            session()->flash('success', 'New RAM added.');
        }else{
            session()->flash('error', 'Error while Adding a new RAM');
        }

        return redirect('/admin/rams');
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
        //
        $ram = Ram::find($id);
        return view('admin/ram/edit', compact('ram'));
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
        //
        $ram = Ram::find($id);
        $valid = $request->validate([
            'ram_size' => 'bail|required|max:255',
            'ram_price' => 'bail|required|regex:/^\d[\.\d{2}]?/', 
        ]);

        $valid['slug'] = Str::slug($valid['ram_size'],'-');
        $valid['active'] = 'yes';

        if($ram->update($valid)){
            session()->flash('success', 'RAM updated successfully.');
        }else{
            session()->flash('error', 'Error while updating RAM');
        }

        return redirect('/admin/rams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ram = Ram::find($id);
        
        $valid['active'] = 'no';

        if($ram->update($valid)){
            session()->flash('success', 'RAM is now inactivated.');
        }else{
            session()->flash('error', 'Error while inactivating RAM');
        }

        return redirect('/admin/rams');
    }
}
