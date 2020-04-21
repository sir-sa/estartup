<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts =About::all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abouts =array(
            'src'=>$request->src,
            'description'=>$request->description,
            'list1'=>$request->list1,
            'list2'=>$request->list2,
            'list3'=>$request->list3,
            'list4'=>$request->list4,
            'list5'=>$request->list5,
           
        );

        About::create($abouts);

        return redirect()->route('admin.about.index');
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
        $abouts =About::findOrFail($id);
        return view('admin.about.edit',compact('abouts'));
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
            'description'=>'required',
            'list1'=>'required',
            'list2'=>'required',
            'list3'=>'required',
            'list4'=>'required',
            'list5'=>'required',
             
        ]);

        $abouts = About::find($id);
        $abouts->src = $request->input('src');
        $abouts->description = $request->input('description');
        $abouts->list1= $request->input('list1');
        $abouts->list2= $request->input('list2');
        $abouts->list3= $request->input('list3');
        $abouts->list4= $request->input('list4');
        $abouts->list5= $request->input('list5');
         
        $abouts->save(); //persist the data
        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts= About::findOrFail($id);
        $abouts->delete();

        return redirect(route('admin.about.index'));
    }
}
