<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{

    public function Index(Request $request)
    {
//        $categories = Category::query()->get();
//        dd($categories);

        $posts = Post::query()->get();
        //dd($posts);

//        $posts = Post::query()->with('Category')->get();
//        $category = $posts[0]->Category;
//        dd($category->name);

        //$posts = Post::query()->with('Tags')->get();

        //foreach ($posts[0]->Tags as $tag) {
        //    echo $tag->name. '<br />';
        //}

        //dd($posts);
        return view('post.index', ['posts'=> $posts,
            'title'=> 'Список постів']);
    }

    public function List(Request $request)
    {
//        $categories = Category::query()->get();
//        dd($categories);

        $posts = Post::query()->paginate(10);
        //dd($posts);

//        $posts = Post::query()->with('Category')->get();
//        $category = $posts[0]->Category;
//        dd($category->name);

        //$posts = Post::query()->with('Tags')->get();

        //foreach ($posts[0]->Tags as $tag) {
        //    echo $tag->name. '<br />';
        //}

        //dd($posts);
        return view('post.list', ['posts'=> $posts,
            'title'=> 'Список постів']);
    }
}
