<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonials::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonials =array(
             
            'heading'=>$request->heading,
            'description'=>$request->description,
           
        );

        Testimonials::create($testimonials);
        

        return redirect()->route('admin.testimonial.index');
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
        $testimonials = Testimonials::findOrFail($id);
        return view('admin.team.edit',compact('teams'));
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
            'description'=>'required',
             
        ]);

        $testimonials =  Testimonials::find($id);
        
        $testimonials->heading = $request->input('heading');
        $testimonials->description = $request->input('description');
         
         
        $testimonials->save(); //persist the data
        return redirect()->route('admin.testimonia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials= Testimonials::findOrFail($id);
        $testimonials->delete();

        return redirect()->route('admin.testimonial.index');
    }
}
