<?php 
namespace App\Services;

use App\Models\Post;

class PostService {
    /* display list of reosurce document */
    public static function PostList(){
        return Post::latest()->get(['post_id','title', 'short_des']);
    }

    /* store documents */
    public static function PostStoreDocument($request){
        return array(
            'title' => $request->title,
            'short_des' => $request->short_des,
            'des' => $request->des,
        );
    }

    /* store document create */
    public static function PostCreate($request){
        return Post::create(PostService::PostStoreDocument($request));
    }
}
 