<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Traits\FileUploadTriat;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use FileUploadTriat;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('dashbord.users.index',['users'=>$users]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);

        return view('dashbord.users.edit_user',['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {    
          $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255',],
        'profile_img' => ['required',],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);
   // $name=$request->file('profile_img')->getClientOriginalName();
       $user=User::findOrFail($request->id);
       if($request->email==$user->email){

       if($request->hasFile('profile_img')){

        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'profile_img'=>$request->file('profile_img')->getClientOriginalName()
        ]);
         
        $this->uploadFile($request,'profile_img','users');
        session()->flash('edit','user edtit successfully');
        return  redirect()->route('users.index');
      } 
    else{
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        session()->flash('edit','user edtit successfully');
        return  redirect()->route('users.index');
       }
    }else{

        if($request->hasFile('profile_img')){

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'profile_img'=>$request->file('profile_img')->getClientOriginalName()
            ]);
             
            $this->uploadFile($request,'profile_img','users');
            session()->flash('edit','user edtit successfully');
            return  redirect()->route('users.index');
          } 
        else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('edit','user edtit successfully');
            return  redirect()->route('users.index');
           }
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {//dd($request);
        $user=User::findOrFail($request->id);
        $user->delete();
        session()->flash('delete','user deleted succssfully');
        return  redirect()->route('users.index');
    }
}
