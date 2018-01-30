<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\PostsModel;
use Validator;

class PostsController extends Controller
{
  public function index($id = null)
  {
  	if($id) {
  		// $data = PostsModel::find($id);
  		// echo "<pre>";
  		// print_r($data); exit;
  		return view('singleposts', ['posts' => PostsModel::find($id)]);
  	} else {
  		$posts = PostsModel::orderby('id', 'desc')->paginate(4);
  		return view('posts',[ 'posts'=>$posts ]);
  	}
  }

  public function newPost(Request $request)
  {
    $validator = Validator::make($request->all(), [
	    'title' => 'bail|required|max:255',
      'body' => 'required',
    ]);

    if ($validator->passes()) {
    	$new_post = new PostsModel();
    	$new_post->title = $request->title;
  		$new_post->body = $request->body;
  		$new_post->save();
			return response()->json(['success'=>1], 200);
    } else {
    	return response()->json(['error'=>$validator->errors()->all()], 406);
    }
  }
}