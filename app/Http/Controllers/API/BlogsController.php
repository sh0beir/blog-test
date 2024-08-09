<?php

namespace App\Http\Controllers\API;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\BlogResource;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::query()->paginate(15);
        return BlogResource::collection($blogs);
    }
}
