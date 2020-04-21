<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fordiscount;

class  FordiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs =Fordiscount::all();

        return view ('admin.fordiscount.index',compact('indexs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fordiscount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indexs =array(
            'src'=>$request->src,
            'heading'=>$request->heading,
            'description'=>$request->description,
           
        );

        Fordiscount::create($indexs);

        return redirect()->route('admin.fordiscount.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indexs = Fordiscount::findOrFail($id);

        return view('admin.fordiscount.show',compact('indexs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indexs = Fordiscount::findOrFail($id);

        return view('admin.fordiscount.edit',compact('indexs'));
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

        $indexs = Fordiscount::find($id);
        $indexs->src = $request->input('src');
        $indexs->heading = $request->input('heading');
        $indexs->description = $request->input('description');
         
         
        $indexs->save(); //persist the data
        return redirect()->route('admin.fordiscount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indexs= Fordiscount::findOrFail($id);
        $indexs->delete();

        return redirect(route('admin.fordiscount.index'));
    }
}
