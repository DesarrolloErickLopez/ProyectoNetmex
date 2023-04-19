<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mycount;
use App\Models\Historial;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Http;

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
        $historial = Historial::get(); 
        $historialMovies = [];
        foreach ($historial as $id) {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id ['ID'].'?append_to_response=credits,videos,images')
            ->json(); 
            array_push($historialMovies, $movie);
        }

        return view('mycount', [
            'users' =>$users,
            'historial' =>$historial,
            'historialMovies' =>$historialMovies,

        ]
    );
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

        $historial = Historial::get(); 
        $historialMovies = [];
        foreach ($historial as $id) {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id ['ID'].'?append_to_response=credits,videos,images')
            ->json(); 
            array_push($historialMovies, $movie);
        }

        return view('mycount', [
            'historial' =>$historial,
            'historialMovies' =>$historialMovies,

        ]
        );
    }

}
