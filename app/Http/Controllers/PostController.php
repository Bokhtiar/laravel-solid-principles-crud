<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequestValidator;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $posts = PostService::PostList();
            return view('modules.post.index', compact('post'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        return view('modules.post.createUpdate');
    }

    /* Store a newly created resource in storage. */
    public function store(PostRequestValidator $request)
    {
        try {
            PostService::PostCreate($request);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
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
