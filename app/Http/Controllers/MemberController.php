<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class MemberController extends Controller
{
    public function signin(Request $request)
    {
        $request->validate([
            'member_email' => 'required',
            'member_password' => 'required',
        ]);
        if (Auth::attempt(['member_email' => $request->member_email, 'member_password' => $request->member_password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'member_password' => 'Wrong username or password',
        ]);
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'member_email' => 'required',
            'member_password' => 'required',
        ]);

        $user = new Member([
            'member_email' => $request->username,
            'member_password' => $request->password,
        ]);
        $user->save();

        return redirect()->route('member')->with('success', 'Registration success. Please login!');
    }

    public function signout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_name' => 'required',
            'member_password' => 'required',
            'member_email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 400);
        }

        $data = Member::create($request->only(['member_name', 'member_password', 'member_email']));

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data' => $data
        ], 201);
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
