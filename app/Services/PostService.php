<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class PostService
{

    public function add(Request $request)
    {
        try {
            $post = $request->except('_token', '_method');
            $result = Post::create($post);
            return $result;
        } catch (Exceptio $e)
        {
            return $e;
        }
    }

}
