<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Features;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features =Features::all();
        return view('admin.features.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $features =array(
        //     'src'=>$request->src,
        //     'heading'=>$request->heading,
        //     'description'=>$request->description,
           
        // );
        // Features::create($features);

        $features = new Features();
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/svg/',$filename);
            $features->src =$filename;
        } else {
            return   $request;
            $features ->src ='src';
        }
        $features->heading=$request->input('heading');
        $features->description=$request->input('description');
        $features->save();


        return redirect()->route('admin.features.index');
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
        $features = Features::findOrFail($id);

        return view('admin.features.edit',compact('features'));
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
        $request->validate([
            'src'=>'required',
            'heading'=>'required',
            'description'=>'required',
             
        ]);

        $features = Features::find($id);
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/svg/',$filename);
            $features->src =$filename;
        }
         
        $features->heading = $request->input('heading');
        $features->description = $request->input('description');
         
         
        $features->save(); //persist the data
        return redirect()->route('admin.features.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $features= Features::findOrFail($id);
        $features->delete();

        return redirect()->route('admin.features.index');
    }
}
