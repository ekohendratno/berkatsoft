<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response = Http::get(config('services.tmdb.endpoint').'movie/popular', [
            'api_key' => config('services.tmdb.api')
        ]);

        if($response->ok()) {
            $data = $response->json();

            foreach ($data['results'] as $d) {

                Film::create([
                    'adult' => $d['adult'],
                    'backdrop_path' => $d['backdrop_path'],
                    'genre_ids' => json_encode( $d['genre_ids'] ),
                    'original_id' => $d['id'],
                    'original_language' => $d['original_language'],
                    'original_title' => $d['original_title'],
                    'overview' => $d['overview'],
                    'popularity' => $d['popularity'],
                    'poster_path' => $d['poster_path'],
                    'release_date' => $d['release_date'],
                    'title' => $d['title'],
                    'video' => $d['video'],
                    'vote_average' => $d['vote_average'],
                    'vote_count' => $d['vote_count'],
                ]);

            }
        } else {
            echo "Failed to fetch popular movies.";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
    }
}
