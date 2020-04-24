<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('admin.blog.index',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $blogs =array(
        //     'src'=>$request->src,
        //     'description'=>$request->description,
        //     'date'=>$request->date,
           
        // );
        // BLog::create($blogs); 


        $blogs = new Blog();
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/blog/',$filename);
            $blogs->src =$filename;
        } else {
            return   $request;
            $blogs ->src ='src';
        }
        $blogs->description = $request->input('description');
        $blogs->date = $request->input('date');
        $blogs->save();

        return redirect()->route('admin.blog.index');
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
        $blogs =Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blogs'));
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
            'date'=>'required',
             
        ]);

        $blogs = Team::find($id);
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/blog/',$filename);
            $blogs->src =$filename;
        }
        
        $blogs->description = $request->input('description');
        $blogs->date = $request->input('date');
         
         
        $blogs->save(); //persist the data
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs= Blog::findOrFail($id);
        $blogs->delete();

        return redirect()->route('admin.blog.index');
    }
}
