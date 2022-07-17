<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
      return view('Admin.users',compact('users'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nameAr' => 'required',
            'nameTr' => 'required',
            'description' =>'required',
            'descriptionAr' =>'required',
            'descriptionTr' =>'required',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|min:8',
        ],[

            'name.required' =>'please enter  name ',
            'email.required' =>'please enter  email',
            'email.unique' =>' this Email is used  Enter Another Email ',
            'description.required' =>'please enter  Description  ',
            'descriptionAr.required' =>'please enter  Description in Arabic  ',
            'descriptionTr.required' =>'please enter  Description in Turkey  ',
            'password.required' =>'please enter  Password ',
            'password.min'=>'this password is very short',
            'nameAr.required' =>'please enter  name in Arabic ',
            'nameTr.required' =>'please enter  name  in Turkey',
        ]);
        User::create([
            'name' => $request->name,
            'nameAr' => $request->nameAr,
            'nameTr' => $request->nameTr,
            'description' => $request->description,
            'descriptionAr' => $request->descriptionAr,
            'descriptionTr' => $request->descriptionTr,
            'password'=>  Hash::make($request->password),
            'email' => $request->email,
        ]);
        session()->flash('Add','User Added Successfully !');
        return redirect()->route('users.index');


        // creat fn user
    }
    public function update(Request $request){

        $users = User::findOrFail($request->id);
        $validatedData = $request->validate([
            'name' => 'required',
            'nameAr' => 'required',
            'nameTr' => 'required',
            'email'=>'required|max:255|email',
            'description'=>'required',
            'descriptionAr'=>'required',
            'descriptionTr'=>'required',
        ],[
            'name.required' =>'please enter  name ',
            'email.required' =>'please enter  email',
            'email.unique' =>' this Email is used  Enter Another Email ',
            'description.required' =>'please enter  Description  ',
            'descriptionAr.required' =>'please enter  Description in Arabic  ',
            'descriptionTr.required' =>'please enter  Description in Turkey  ',
            'nameAr.required' =>'please enter  name in Arabic ',
            'nameTr.required' =>'please enter  name  in Turkey',
        ]);
        $users->update([
                'name' =>$request->name,
                'nameTr' => $request->nameTr,
                'nameAr' => $request->nameAr,
                'descriptionAr' => $request->descriptionAr,
                'descriptionTr' => $request->descriptionTr,
                'email'=>$request->email,
                'description'=>$request->description,
        ]);
        session()->flash('edit','User Updated Successfully !');
        return redirect()->route('users.index');
    }
    //update user function
    public function destroy(Request $request ){
        $users = User::findOrFail($request->id)->delete();
        session()->flash('delete','User Deleted Successfully !');
        return redirect()->route('users.index');
    }
    // destroy fn for users
    public function search(Request $request ){
        $search=$request->search;
         $users= User::where('name' ,'Like','%'.$search."%")->orwhere('nameAr' ,'Like','%'.$search."%")->orwhere('nameTr' ,'Like','%'.$search."%")->get();
         return view('Admin.users',compact('users'));
        }
}
