<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams =Team::all();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $teams =array(
        //     'src'=>$request->src,
        //     'heading'=>$request->heading,
        //     'description'=>$request->description,
           
        // );

        // Team::create($teams);

        $teams = new Team();
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/svg/',$filename);
            $teams->src =$filename;
        } else {
            return   $request;
            $teams ->src ='src';
        }
        $teams->heading=$request->input('heading');
        $teams->description=$request->input('description');
        $teams->save();

        return redirect()->route('admin.team.index');
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
        $teams =Team::findOrFail($id);
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
            'src'=>'required',
            'heading'=>'required',
            'description'=>'required',
             
        ]);

        $teams = Team::find($id);
        if ($request->file('src')) {
            $file = $request->file('src');    
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename= time() . '.' . $extension;
            $file ->move('img/svg/',$filename);
            $teams->src =$filename;
        }
        $teams->heading = $request->input('heading');
        $teams->description = $request->input('description');
         
         
        $teams->save(); //persist the data
        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams= Team::findOrFail($id);
        $teams->delete();

        return redirect()->route('admin.team.index');
    }
}
