<?php

namespace App\Http\Controllers;

use App\PostReply;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostRepliesController extends Controller
{
    public function showPostReplies($postid)
    {
        $replies = PostReply::where('post_id', $postid)->get();

        return $replies;
    }

    public function create(Request $request)
    {
        $reply = PostReply::create($request->all());
        $reply->user_id = Auth::user()->id;
        $reply->save();
        return redirect()->back();
    }

    public function select_solution($id)

    {
        //TODO: think do you want to give option to change selection

        $reply  = PostReply::find($id);
        //dd($reply->toArray());
        $replies = PostReply::where('post_id', $reply->post_id)->get();
        foreach ($replies as $rpl) {
            $rpl->is_choosen = 0;
            $rpl->save();
        }

        $reply->is_choosen = 1;
        $reply->save();
        return redirect()->back();
    }
}
