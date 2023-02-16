<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {

        $posts = Film::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Film $post)
    {
        //return response
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $post
        ]);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'adult'     => 'required',
            'backdrop_path'   => 'required',
            'genre_ids'   => 'required',
            'original_id'   => 'required',
            'original_language'   => 'required',
            'original_title'   => 'required',
            'popularity'   => 'required',
            'poster_path'   => 'required',
            'release_date'   => 'required',
            'title'   => 'required',
            'video'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Film::create([
            'adult'     => $request->adult,
            'backdrop_path'   => $request->backdrop_path,
            'genre_ids'   => $request->genre_ids,
            'original_id'   => $request->original_id,
            'original_language'   => $request->original_language,
            'original_title'   => $request->original_title,
            'popularity'   => $request->popularity,
            'poster_path'   => $request->poster_path,
            'release_date'   => $request->release_date,
            'title'   => $request->title,
            'video'   => $request->video
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $post
        ]);
    }

    public function update(Request $request, Film $post)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'adult'     => 'required',
            'backdrop_path'   => 'required',
            'genre_ids'   => 'required',
            'original_id'   => 'required',
            'original_language'   => 'required',
            'original_title'   => 'required',
            'popularity'   => 'required',
            'poster_path'   => 'required',
            'release_date'   => 'required',
            'title'   => 'required',
            'video'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post->update([
            'adult'     => $request->adult,
            'backdrop_path'   => $request->backdrop_path,
            'genre_ids'   => $request->genre_ids,
            'original_id'   => $request->original_id,
            'original_language'   => $request->original_language,
            'original_title'   => $request->original_title,
            'popularity'   => $request->popularity,
            'poster_path'   => $request->poster_path,
            'release_date'   => $request->release_date,
            'title'   => $request->title,
            'video'   => $request->video
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diudapte!',
            'data'    => $post
        ]);
    }

    public function destroy($id)
    {
        //delete post by ID
        Film::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Post Berhasil Dihapus!.',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response = Http::get(config('services.tmdb.endpoint') . 'movie/popular', [
            'api_key' => config('services.tmdb.api')
        ]);

        if ($response->ok()) {
            $data = $response->json();

            foreach ($data['results'] as $d) {

                Film::create([
                    'adult' => $d['adult'],
                    'backdrop_path' => $d['backdrop_path'],
                    'genre_ids' => json_encode($d['genre_ids']),
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


            return redirect('/posts')->with("success", "Berhasil ambil data!");
        } else {
            echo "Failed to fetch popular movies.";
        }
    }
}
