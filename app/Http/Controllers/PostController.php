<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{   


    public function home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about(){
        $data=[
            "title" => "About",
            "name" => "Maritza Angel",
            "email" => "maritzaangel04@gmail.com",
            "phone" => "08763932001"
        ];
        return view('about', $data);
    }
    
    public function posts()
    {
        return view('posts', [
            "title" => "Posts"
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
