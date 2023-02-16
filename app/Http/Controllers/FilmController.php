<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::orderBy('release_date')->get();

        return view('pages.film', compact('films'));
    }


    public function show($id)
    {

        if($id == "populer"){
            $films = Film::orderBy('release_date')->get();

            return view('pages.film', compact('films'));
        }elseif($id == "nowplaying"){
            $films = Film::orderBy('release_date')->get();

            return view('pages.film', compact('films'));
        }elseif($id == "upcoming"){
            $films = Film::orderBy('release_date')->get();

            return view('pages.film', compact('films'));
        }elseif($id == "toprating"){
            $films = Film::orderBy('release_date')->get();

            return view('pages.film', compact('films'));
        }else{


            $film = Film::where('original_id', $id)->first();
            $films = Film::orderBy('release_date')->limit(10)->get();

            return view('pages.film-detail',compact('film','films'));

        }
    }
}
