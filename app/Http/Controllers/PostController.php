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
            return view('modules.post.index', compact('posts'));
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

    /* Show the form for editing the specified resource. */
    public function edit(string $id)
    {
        try {
            $edit = PostService::PostFindByID($id);
            return view('modules.post.createUpdate', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, string $id)
    {
        try {
            PostService::PostUpdate($request, $id);
            return redirect()->route('post.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            PostService::PostFindByID($id)->delete();
            return redirect()->route('post.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
