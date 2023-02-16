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
            'title'     => 'required',
            'content'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Film::create([
            'title'     => $request->title,
            'content'   => $request->content
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
            'title'     => 'required',
            'content'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post->update([
            'title'     => $request->title,
            'content'   => $request->content
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
        Member::where('id', $id)->delete();

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

}
