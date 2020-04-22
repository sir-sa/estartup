<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pricing;

class  PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices=Pricing::all();
        return view('admin.pricing.index',compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prices =array(
            'heading'=>$request->heading,
            'cash'=>$request->cash,
            'list1'=>$request->list1,
            'list2'=>$request->list2,
            'list3'=>$request->list3,
            'list4'=>$request->list4,
            'list5'=>$request->list5,
           
        );

        Pricing::create( $prices);

        return redirect()->route('admin.pricing.index');
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
        $prices = Pricing::findOrFail($id);
        return view('admin.pricing.edit',compact('prices'));
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
            'heading'=>'required',
            'cash'=>'required',
            'list1'=>'required',
            'list2'=>'required',
            'list3'=>'required',
            'list4'=>'required',
            'list5'=>'required',
             
        ]);

        $prices = Pricing::find($id);
        $prices->heading = $request->input('heading');
        $prices->cash = $request->input('cash');
        $prices->list1= $request->input('list1');
        $prices->list2= $request->input('list2');
        $prices->list3= $request->input('list3');
        $prices->list4= $request->input('list4');
        $prices->list5= $request->input('list5');
         
        $prices->save(); //persist the data
        return redirect()->route('admin.pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prices=  Pricing::findOrFail($id);
        $prices->delete();

        return redirect(route('admin.pricing.index'));
    }
}
