<?php
namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

   public function getUserPosts($id)
    {

        $user = User::find($id)->posts()->get();

        return ($user);

    }
}
