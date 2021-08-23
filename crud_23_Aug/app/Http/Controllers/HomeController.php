<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function ajaxRequest()
    {

        return view('welcome');
    }

    public function ajaxRequestPost(Request $request)
    {

        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'details' => 'required',
        // ]);

        // $validator = Validator::make($request->all(), [
        //     // 'title' => 'required|unique:posts',
        //     'title' => 'required',
        //     'details' => 'required|string|max:50',
        //     // 'password' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     Session::flash('error', $validator->messages()->first());
        //     return redirect()->back()->withInput();
        // }

        \DB::table('posts')->insert([
            'title' => $request->Code, //This Code coming from ajax request
            'details' => $request->Chief, //This Chief coming from ajax request
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully',
            ]
        );
    }
}
