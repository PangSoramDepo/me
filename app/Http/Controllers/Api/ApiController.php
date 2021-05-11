<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post,Category};

class ApiController extends Controller
{
    public function loadmore()
    {
        $exclude = explode(',',request('exclude'));
        $page = request('page');
        $skip = (($page - 1) * 4) + 7;
        $posts = Post::where(['is_portrait' => 0, 'status' => 'published'])->whereNotIn('id',$exclude)->orderBy('action_date', 'DESC')->skip($skip)->take(4)->get();
        $isLoadMore = Post::where(['is_portrait' => 0, 'status' => 'published'])->whereNotIn('id',$exclude)->count();

        $data = array(
            'html'  =>  $this->cardString($posts),
            'isLoadMore'    =>  $isLoadMore > $skip + 4 ? true : false
        );

        return $data;
    }

    private function cardString($posts) {
        $st = '';
        foreach ($posts as $item) {
            $st .= '<div class="col-lg-6 col-md-12 col-sm-6 card-container">
                <div class="blog-card post-grid">
                    <div class="blog-card-media">
                        <img src="' . url('storage/'. $item->image) . '" alt=""/>
                    </div>
                    <div class="blog-card-info">
                        <div class="title-sm"><a href="javascript:void(0);">' .$item->category->name .'</a></div>
                        <h4 class="title"><a href="' .route('post_detail', $item->id) .'">' .$item->title .'</a></h4>
                        <p>' . $item->excerpt . '</p>
                        ' . view('layout.socialLink') . '
                    </div>
                </div>
            </div>';
        }
        return $st;
    }
}
