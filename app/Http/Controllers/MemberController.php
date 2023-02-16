<?php

namespace App\Http\Controllers;


use App\Models\Member;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.member-login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         //define validation rules
         $validator = Validator::make($request->all(), [
             'member_name'     => 'required',
             'member_password'   => 'required',
             'member_email'   => 'required',
         ]);

         //check if validation fails
         if ($validator->fails()) {
             return response()->json($validator->errors(), 422);
         }

         //create post
         $data = Member::create([
             'member_name'     => $request->member_name,
             'member_password'   => $request->member_password,
             'member_email'   => $request->member_email,
         ]);

         //return response
         return response()->json([
             'success' => true,
             'message' => 'Data Berhasil Disimpan!',
             'data'    => $data
         ]);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

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
