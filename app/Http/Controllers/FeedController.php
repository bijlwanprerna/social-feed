<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Models\Follow;
use App\Models\Post;
use App\Jobs\SendPostNotification;
use App\Events\PostCreated;

class FeedController extends Controller
{
    public function follow()
    {
        Follow::create([
            'user_id' => 1,
            'follow_user_id' => 2
        ]);

        return 'Followed Successfully';
    }

    public function feed()
    {
        $posts = Cache::remember('feed_1', 600, function () {

            $followingIds = Follow::where('user_id', auth()->id())
                    ->pluck('follow_user_id');

            return Post::with('user')
                        ->whereIn('user_id', $followingIds)
                        ->latest()
                        ->get();
        });

        return $posts;
    }

    public function createPost(){
        Post::create([
            'user_id' => 2,
            'content' => 'New cached post'
        ]);

        Cache::forget('feed_1');

        //SendPostNotification::dispatch();

        event(new PostCreated('New post created'));

        return 'Post Created';
    }
}