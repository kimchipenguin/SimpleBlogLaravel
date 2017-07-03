<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ArticleModel;

class BlogViewController extends Controller
{
	public function showPost($year, $month, $seotitle)
	{
		$post = ArticleModel::where('articleDate', 'LIKE', '%'.$year.'-'.$month.'%')->where('articleTitleSeo', $seotitle)->join('user', 'user.id', '=', 'article.create_user')->first();
		$user=new \stdClass();
		if (Auth::check()) {
			$user = Auth::user();
			unset($user->password);
			unset($user->remember_token);
		}
		return view('viewpost', ['postdata'=> $post, 'user'=>$user]);
	}

}
