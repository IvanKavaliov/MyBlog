<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view('admin.post.create');
    }
}
