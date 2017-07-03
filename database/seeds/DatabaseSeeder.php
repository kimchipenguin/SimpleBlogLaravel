<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UserTableSeeder::class);
		$this->call(ArticleTableSeeder::class);
	}
}
	class UserTableSeeder extends Seeder {

		public function run() {
			$db = DB::connection('mysql');
			/* Generierung einiger Test-User - diese dienen nur zum Überprüfen der Funktionsfähigkeit 
			   und sollten später entfernt werden. */
			$user_admin = new User();
			$user_admin->name = 'Kimchi';
			$user_admin->email = 'mj@testuser.de';
			$user_admin->role = 'admin';
			$user_admin->password = bcrypt('notasecurepassword');
			$user_admin->save();

			$user_admin = new User();
			$user_admin->name = 'Kimbab';
			$user_admin->email = 'kimbab@testuser.de';
			$user_admin->role = 'author';
			$user_admin->password = bcrypt('whohackspasswordsanyway');
			$user_admin->save();

			$user_admin = new User();
			$user_admin->name = 'NoSpam';
			$user_admin->email = 'nospam@testuser.de';
			$user_admin->role = 'user';
			$user_admin->password = bcrypt('1234567');
			$user_admin->save();
		}
	}
	class ArticleTableSeeder extends Seeder {

		public function run() {
			$testTitles = array('A premium way making Kimchi', 'How Kimchi brought peace to the world', 'New power plant powered by red Kimchi', 'Kimchi Museum opening in Cologne');
			$db = DB::connection('mysql');
			$content = file_get_contents('http://loripsum.net/api/10/short/decorate');
			for($i=0;$i<=3;$i++) {
			 	$new_post = new Article();
			 	$new_post->articleDate = new \DateTime();
			 	$new_post->articleTitleSeo=Str::slug($testTitles[$i]);
			 	$new_post->articleTitle=$testTitles[$i];
			 	$new_post->articleText=$content;
			 	$new_post->create_user=2;
			 	$new_post->edit_user=2;
			 	$new_post->save();
			}
		}
	}
