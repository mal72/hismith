<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users'=>User::all()
        ];
        return view('admin.users.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'user'=>$user
        ];
        return view('admin.users.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->req($request);
        $user->update($request->only('fullname'));
        return redirect()->route('users.index');
    }

    private function req(Request $request)
    {
        $this->validate($request, [
            'fullname'=>'required'
        ]);
    }
}
