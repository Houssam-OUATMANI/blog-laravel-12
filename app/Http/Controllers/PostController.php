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

    public function create()
    {
        return view("post.create");
    }

    public function store(StorePostFormRequest $request)
    {
        $file_path = $request->file("thumbnail")->store("thumbnail");
        $data = $request->validated();
        $data["user_id"] = Auth::id();
        $data["thumbnail"] = "storage/" . $file_path;
        Post::create($data);
        return redirect()->route("post.index")->with("success", "Publication ajoutee");
    }

    public function edit(Post $post, Request $request)
    {
        if($request->user()->cannot("update", $post)) {
            abort(403);
        }

        return view("post.edit", compact("post"));
    }

    public function update(StorePostFormRequest $request, Post $post)
    {
         if($request->user()->cannot("update", $post)) {
            abort(403);
        }
        $data = $request->validated();
        $post->update($data);
        return redirect()->route("post.show", $post)->with("success", "Publication Modifiee");
    }

    public function destroy(Post $post, Request $request)
    {
         if($request->user()->cannot("delete", $post)) {
            abort(403);
        }
        $post->delete();
        return redirect()->route("post.index")->with("success", "Publication Supprimee");
    }
}
