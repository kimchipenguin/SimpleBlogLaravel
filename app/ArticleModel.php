<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'articleDate', 'articleTitleSeo', 'articleTitle', 'articleText', 'articleCommentCount', 'create_user', 'edit_user'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'article';

}
