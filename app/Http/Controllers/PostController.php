<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with("user")->paginate(2);
        return view("post.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("post.show", compact("post"));
    }

    public function create() {}

    public function store() {}

    public function edit() {}

    public function update() {}

    public function destory() {}
}
