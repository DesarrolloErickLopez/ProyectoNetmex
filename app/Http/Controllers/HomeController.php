<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Crear una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Mostrar el panel de la aplicación.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // $popularMovies = HTTP::get('https://developers.themoviedb.org/3/movie/popular')
        //     ->json();

        //     do($popularMovies);
    
        // return view('home');
    }

    //  /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $movie = Http::withToken(config('services.tmdb.token'))
    //         ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
    //         ->json(); 

    //     dump($movie);

    //     return view('mycount', 
    //         [
    //         'movie' =>$movie,
    //         ]
    //     );
    // }
}
