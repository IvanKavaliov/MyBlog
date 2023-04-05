<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        // TODO: Implement __invoke() method.
        return view('admin.user.index', compact('users'));
    }
}
