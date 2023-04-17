<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mycount;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Mycount::get();
		return view('mycount', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('mycount_show',
			[
				'user' => Mycount::findOrFail($id)
			]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('mycount_edit',
            [
                'user' => Mycount::findOrFail($id)
            ]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Mycount $user, CreateUserRequest $request){
        
        $user->update($request->validated());

        return view('mycount');
    }

}
