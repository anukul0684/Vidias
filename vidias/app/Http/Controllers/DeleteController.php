<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DeleteController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(\Auth::user()) {
            $valid = $request->validate([
                'id' => 'bail|required|integer'
            ]);
            
            if($request->slug!='address'){
                $request->slug = rtrim($request->slug,"s ");
            }

            if($request->slug=='addresse'){
                $request->slug = 'address';
            }

            $model = ucfirst($request->slug);

            $model = app("App\Models\\$model");

            $model = $model::find($valid['id']);//dd(gettype($model->id));

            $active=['active'=>'no'];

            if( $model->update($active) ) {
                session()->flash('success', 'This ' .$request->slug. ' was successfully deleted.');
            } else {
                session()->flash('error', 'There was a problem deleting the '.$request->slug.'.');
            }

            return redirect()->back();
        }
        session()->flash('error','Please login to delete the '.$request->slug.'.');
        return redirect('/login');
    }

}
