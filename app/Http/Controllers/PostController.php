<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use FastVolt\Helper\Markdown;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with("user")->paginate(2);
        return view("post.index", compact("posts"));
    }

    public function show(Post $post)
    {
        $markdown = new Markdown();

        $markdown->setContent($post->content);
        $contentAsHtml = $markdown->toHtml();
        $post->content = $contentAsHtml;
        return view("post.show", compact("post"));
    }

    public function create() {
        return view("post.create");
    }

    public function store(StorePostFormRequest $request) {
        $data = $request->validated();
        $data["user_id"] = Auth::id();
        Post::create($data);
        return redirect()->route("post.index")->with("success", "Publication ajoutee");

    }

    public function edit() {}

    public function update() {}

    public function destory() {}
}
