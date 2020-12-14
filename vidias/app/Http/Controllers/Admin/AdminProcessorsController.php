<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Processor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminProcessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processors = Processor::orderBy('id')->where('active','=','yes')->get();  
        return view('admin/processor/index', compact('processors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/processor/create');
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
            'processor_name' => 'bail|required|max:255',
            'processor_price' => 'bail|required|regex:/^\d[\.\d{2}]?/', 
        ]);

        $valid['slug'] = Str::slug($valid['processor_name'],'-');
        $valid['active'] = 'yes';
        $valid['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        if(Processor::create($valid)){
            session()->flash('success', 'New Processor added.');
        }else{
            session()->flash('error', 'Error while Adding a new Processor');
        }

        return redirect('/admin/processors');
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
        $processor = Processor::find($id);
        return view('admin/processor/edit', compact('processor'));
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

        $processor = Processor::find($id);
        $valid = $request->validate([
            'processor_name' => 'bail|required|max:255',
            'processor_price' => 'bail|required|regex:/^\d[\.\d{2}]?/', 
        ]);

        $valid['slug'] = Str::slug($valid['processor_name'],'-');
        $valid['active'] = 'yes';
        $valid['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

        if($processor->update($valid)){
            session()->flash('success', 'Processor updated successfully.');
        }else{
            session()->flash('error', 'Error while updating Processor');
        }

        return redirect('/admin/processors');
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
        $processor = Processor::find($id);
        
        $valid['active'] = 'no';

        if($processor->update($valid)){
            session()->flash('success', 'Processor is now deactivated.');
        }else{
            session()->flash('error', 'Error while deactivating Processor');
        }

        return redirect('/admin/processors');
    }
}
