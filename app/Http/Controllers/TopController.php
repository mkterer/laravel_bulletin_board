<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopController extends Controller
{
    public function index()
    {
        $topic_list = Topic::where('is_valid', 1)->paginate(3);
        return view('top_page', compact('topic_list'));
    }
}
