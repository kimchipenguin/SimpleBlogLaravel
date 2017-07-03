<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\ArticleModel;

class NewPostController extends Controller
{
	public function newBlogPost()
	{
		$user = Auth::user();
		$user = $user->id;
		return view('newpost', ['user'=>$user]);
	}
	public function createBlogPost(Request $request) {
		$user = Auth::user();
		$blogTitle = $request->input('commenttitle');
		$blogText = $request->input('commenttext');
		$article = new ArticleModel();
		$article->articleDate = date('Y-m-d H:i:s');
		$article->articleTitleSeo = Str::slug($blogTitle);
		$article->articleTitle = $blogTitle;
		$article->articleText = $blogText;
		$article->create_user = $user->id;
		$article->edit_user = $user->id;
		$article->save();
		return redirect()->route('home');
	}
}
