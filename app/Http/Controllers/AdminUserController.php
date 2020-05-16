<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\User;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        //
        $users = User::all();
        
        return view('Admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        
        $request['password'] = bcrypt(request()->input('password'));
        User::create(request()->all());

        return redirect('Admin/users');

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
    public function edit(Request $request, $id)
    {
        //
        $users = User::find($id);

        return view('Admin.users.edit',compact('users'));

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
            
            $users = User::findOrFail($id);

            $users->name = $request->input('name');
            $users->is_active = $request->input('is_active');
            $users->email = $request->input('email');
            $users->password = bcrypt($request->input('password'));
            $users->photo_id = $request->input('photo_id');

            $users->save();

            $request->session()->flash('success', 'users updated successfully');
  
            return redirect()->route('users.index');
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
     $users = User::find($id);
     $users->delete();

     return redirect('Admin/users')->with('success', 'Stock has been deleted Successfully');
    }

    
}

