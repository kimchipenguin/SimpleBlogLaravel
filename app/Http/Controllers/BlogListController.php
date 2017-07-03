<?php
namespace App\Http\Controllers;
use App\ArticleModel;

class BlogListController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getList()
	{
		$posts = ArticleModel::join('user', 'user.id', '=', 'article.create_user')->orderByDesc('articleDate')->get();
		// echo $mag ."...". $year ."...".$issue ."..." .$index;
		return view('startpage')->with('bloglist', $posts);
	}
		
}