<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request as seachMethode ;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    

        if(!empty(seachMethode::get('name'))){
        $projects=Project::search(seachMethode::get('name'));
        dd($projects);
        }else{
            $projects=Project::where('user_id',Auth::user()->id)->get();

        }
        return view('dashbord.projects.all_projects',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        
        Project::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
            
        ]);

        session()->flash('add','project added successfully');

        return  redirect()->route('projects.index');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        
        $project=Project::findOrFail($request->id);
        $project->update([
            'name'=>$request->name,
            'description'=>$request->description,
            
        ]);
        session()->flash('edit','project edited successfully');

        return  redirect()->route('projects.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request)
    {
        $project=Project::findOrFail($request->id);
        $project->delete();
        session()->flash('delete','project deleted successfully');

        return  redirect()->route('projects.index');
    }
}
