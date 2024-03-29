<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public $allPosts;

    public function __construct() {
        $this->allPosts = [
        ['id' => 1, 'title' => "PHP", 'posted_by' => 'Ahmed', "created_at" => "2022-10-20 08:00:00"],
        ['id' => 2, 'title' => "JS", 'posted_by' => 'Yossef', "created_at" => "2023-11-18 08:00:00"],
        ['id' => 3, 'title' => "C++", 'posted_by' => 'Yasser', "created_at" => "2002-01-22 08:00:00"],
        ['id' => 4, 'title' => "Python", 'posted_by' => 'Mohammed', "created_at" => "2022-10-02 08:00:00"],
        ];
    }

    public function index() {
        return view('posts.index', ['posts' => $this->allPosts]);
    }

    public function show($postId) {
        
        return view('posts.show', ['post' => $this->allPosts[$postId - 1]]);
    }

    // public function show
}
