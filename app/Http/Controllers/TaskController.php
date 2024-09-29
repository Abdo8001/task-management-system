<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Traits\FileUploadTriat;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TaskAssignedNotification;

class TaskController extends Controller
{
    use FileUploadTriat;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // where('user_id',Auth::user()->id)->
        $tasks=Task::where('status','Pending')->get();
      //  dd($tasks);
        $tasks_comleted=Task::where('status','Completed')->get();
      return view('dashbord.tasks.index',['tasks'=>$tasks,'tasks_comleted'=>$tasks_comleted]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
        $users=User::where('id','!=',Auth::user()->id)->get();
        $projects=Project::where('user_id',Auth::user()->id)->get();
        return view('dashbord.tasks.add_task',['users'=>$users,'projects'=>$projects]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // dd($request);
        $request->validate([
            'title'=>'required',
            'task_image'=>'required',
            'user_ids'=>'required',
            'project_id'=>'required',
            'attachment'=>'required',
            'description'=>'required'
        ]);
        // foreach($request->assigned_to as $user){
      $task=new Task();
      
   
         $task->title=$request->title;
         $task->task_image=$request->file('task_image')->getClientOriginalName();
             $task->project_id=$request->project_id;
             $task->description=$request->description;
             $task->attachment=$request->file('attachment')->getClientOriginalName(); 
             $task->created_by=Auth::user()->id;
              $task->save();
                     
              $userIds = $request->input('user_ids');
              $validUserIds = User::whereIn('id', $userIds)->pluck('id')->toArray();
// dd($validUserIds);
       $task->assignedUsers()->attach($validUserIds);


        $this->uploadFile($request,'task_image','tasks/images');
        $this->uploadFile($request,'attachment','tasks/attachment');
        //  foreach(User::whereIn('id',$validUserIds)->get() as $user){
        //     $user->notify(new TaskAssignedNotification($task));

        //      }
    
        session()->flash('add','project added successfully');

        return  redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $task=Task::findOrFail($id);
        $leader=User::findOrFail($task->created_by);
        $comments=Comment::where('task_id',$task->id)->get();
        return view('dashbord.tasks.show_task',['task'=>$task,'leader'=>$leader,'comments'=>$comments]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
       $task=Task::findOrFail($id);
       $users=User::where('id','!=',Auth::user()->id)->get();
        $projects=Project::where('user_id',Auth::user()->id)->get();
       // dd($task->assignedUsers());

        return view('dashbord.tasks.edit_task',['users'=>$users,'projects'=>$projects,'task'=>$task]);

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title'=>'required',
            'user_ids'=>'required',
            'project_id'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);
        if($request->hasFile('attachment')|| $request->hasFile('task_image')){
            $task=Task::findOrFail($request->id);
            $task->update([
                'title'=>$request->title,
                'task_image'=>$request->file('task_image')->getClientOriginalName(),
                'project_id'=>$request->project_id,
                'description'=>$request->description,
                'status'=>$request->status	,
                'attachment'=>$request->file('attachment')->getClientOriginalName(), 
                'created_by'=>Auth::user()->id,
            ]);
            if(isset($request->user_ids)){
                $userIds = $request->input('user_ids');
                $validUserIds = User::whereIn('id', $userIds)->pluck('id')->toArray();
  // dd($validUserIds);
  
        // $task->assignedUsers()->attach($validUserIds);
  
                $task->assignedUsers()->sync($validUserIds);

            }else{
                $task->assignedUsers()->sync(array());
            }
            $this->uploadFile($request,'task_image','tasks/images');
            $this->uploadFile($request,'attachment','tasks/attachment');
    
        
            session()->flash('edit','project edited successfully');
    
            return  redirect()->route('tasks.index');
        }else{
            $task=Task::findOrFail($request->id);

                $task->update([
                    'title'=>$request->title,
                    'project_id'=>$request->project_id,
                    'description'=>$request->description,
                    'status'=>$request->status,
                    'created_by'=>Auth::user()->id,
                ]);
        
                if(isset($request->user_ids)){
                    $userIds = $request->input('user_ids');
                    $validUserIds = User::whereIn('id', $userIds)->pluck('id')->toArray();
      // dd($validUserIds);
      
            // $task->assignedUsers()->attach($validUserIds);
      
                    $task->assignedUsers()->sync($validUserIds);    
                }else{
                    $task->assignedUsers()->sync(array());
                }
                session()->flash('edit','task edited successfully');
        
                return  redirect()->route('tasks.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request)
    {
     $task=Task::findOrFail($request->id);
     $task->delete(); 
     session()->flash('delete','task deleted successfully');
        
     return  redirect()->route('tasks.index');       
    }

    public function downloadAttachment($filename){

        return response()->download(public_path('attachments/tasks/attachment/'.$filename));

    }
}
