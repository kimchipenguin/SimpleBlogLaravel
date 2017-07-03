<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('articleID')->unsigned();
			$table->integer('parentID')->unsigned();
			$table->text('commentText');
			$table->integer('create_user')->unsigned();
			$table->integer('edit_user')->unsigned();
			$table->timestamps();
			$table->foreign('articleID')->references('id')->on('article')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comment');
	}
}
