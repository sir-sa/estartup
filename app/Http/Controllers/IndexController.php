<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Contact;
use App\Features;
use App\Pricing;
use App\Screenshots;
use App\Team;
use App\Fordiscount;
use App\About;
use App\Testimonials;
 

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $indexs =Fordiscount::all();
        $abouts =About::all();
        $features =Features::all();
        $screenshots =Screenshots::all();
        $teams =Team::all();
        $testimonials=Testimonials::all();
        $prices=Pricing::all();
        $blogs=Blog::all();

       return view('welcome',compact('indexs','abouts','features',
       'screenshots','teams','testimonials','prices','blogs'));
    }
    
    // public function index()
    // {
    //     $index =['About',
    //     'Blog',
    //     'Contact',
    //     'Features',
    //     'Pricing',
    //     'Screenshot',
    //     'Team'];
    //     return view('welcome',compact('index'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
