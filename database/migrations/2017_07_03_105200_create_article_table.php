<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function (Blueprint $table) {
			$table->increments('id');
			$table->datetime('articleDate');
			$table->string('articleTitleSeo', 255);
			$table->string('articleTitle', 255);
			$table->text('articleText');
			$table->integer('articleCommentCount')->unsigned()->default(0);
			$table->integer('create_user')->unsigned();
			$table->integer('edit_user')->unsigned();
			$table->timestamps();
			$table->foreign('create_user')->references('id')->on('user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('article');
	}
}
