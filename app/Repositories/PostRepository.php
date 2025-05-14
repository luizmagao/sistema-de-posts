<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Post;
use Exception;

class PostRepository
{

    public function add(Request $request)
    {
        try {
            $post = $request->except(['_method', '_token']);
            $result = Post::create($post);
            return $result;
        } catch(Exception $e)
        {
            return $e;
        }
    }

}
