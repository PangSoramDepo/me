<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post,Category};
use DB;

class HomeController extends Controller
{
    public function index()
    {
        // PREPARATION LATEST POST FOR EACH CATEGORY FOR 3 RECORD
        $topCollection = collect([]);
        $latestCategoryInPosts = DB::table('posts')->select(DB::raw('category_id, max(action_date) as action_date'))->where('status','published')->orderBy('action_date', 'DESC')->groupBy('category_id')->take(3)->get();
        $top = Category::whereIn('id',$latestCategoryInPosts->map->category_id->toArray())->get();
        foreach ($top as $item )
            $topCollection->push($item->latestPost());
        $topIds = $topCollection->map->id;

        // PREPARATION ANOTHER QUERY
        $categories = Category::all();
        $latestPost = Post::where(['is_portrait' => 0, 'status' => 'published'])->orderBy('action_date', 'DESC')->take(4)->get();
        $portrait_top = Post::where(['is_portrait' => 1, 'category_id' => '3', 'status' => 'published'])->orderBy('action_date', 'DESC')->first();
        $portrait_middle = Post::where(['is_portrait' => 1, 'status' => 'published'])->where('category_id','!=','3')->orderBy('action_date', 'DESC')->first();
        $posts = Post::where(['is_portrait' => 0, 'status' => 'published'])->whereNotIn('id',$topIds)->orderBy('action_date', 'DESC')->take(7)->get();
        $isLoadMore = Post::where(['is_portrait' => 0, 'status' => 'published'])->whereNotIn('id',$topIds)->count();

        // PREPARATION DATA OBJECT
        $data = array(
            'tops'   =>  $topCollection->sortByDesc('action_date'),
            'portrait_top' =>  $portrait_top,
            'portrait_middle' =>  $portrait_middle,
            'post_middle'   => $posts->splice(0, 3),
            'post_down' => $posts->all(),
            'latestPosts'   =>  $latestPost,
            'categories'    =>  $categories,
            'isLoadMore'    =>  $isLoadMore > 7 ? true : false,
            'excludeIds'    =>  implode(",", $topIds->toArray())
        );

        // RETURN RESPONSE
        return view('index', $data);
    }

    public function detail($id)
    {
        // PREPARATION QUERY
        $categories = Category::all();
        $latestPost = Post::where(['is_portrait' => 0, 'status' => 'published'])->orderBy('action_date', 'DESC')->take(3)->get();
        $post = Post::where(['id' => $id, 'status' => 'published'])->firstOrFail();
        $prev = Post::where('action_date', '<=', $post->action_date)->where('id', '<', $post->id)->first();
        $next = Post::where('action_date', '>=', $post->action_date)->where('id', '>', $post->id)->first();

        // PREPARATION DATA OBJECT
        $data = array(
            'latestPosts'   =>  $latestPost,
            'categories'    =>  $categories,
            'post'  =>  $post,
            'relates'    =>  [$prev, $next]
        );

        // RETURN RESPONSE
        return view('post-detail', $data);
    }
}
