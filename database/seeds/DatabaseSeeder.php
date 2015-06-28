<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\News;
use App\Contact;
use App\Setting;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('ContactTableSeeder');
		$this->call('SettingTableSeeder');
	}

}


class UserTableSeeder extends Seeder {

	public function run() {

		DB::table('users')->delete();

		$users = [
			['name' => 'sonny', 'email' => 'sonnylazuardi@gmail.com', 'password'=>Hash::make('ontadilangit')],
			['name' => 'alif', 'email' => 'alifradityar@gmail.com', 'password'=>Hash::make('aliflogic')]
		];

		foreach ($users as $user) {
			User::create($user);
		}

	}

}

class NewsTableSeeder extends Seeder {

	public function run() {

		DB::table('news')->delete();

		$news = [
			['title'=>'Berita Satu', 'slug'=>'berita-satu', 'image'=>'files/spongebob.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates delectus ipsa nisi deserunt quisquam ex nostrum, aperiam cumque assumenda! Iusto omnis temporibus laborum voluptatem eius earum voluptatibus officia ex sequi!','pinned'=>true ,'latitude'=>0,'longitude'=>0],
			['title'=>'Berita Dua', 'slug'=>'berita-dua', 'image'=>'files/spongebob.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates delectus ipsa nisi deserunt quisquam ex nostrum, aperiam cumque assumenda! Iusto omnis temporibus laborum voluptatem eius earum voluptatibus officia ex sequi!','pinned'=>false,'latitude'=>0,'longitude'=>0]
		];

		foreach ($news as $news_item) {
			News::create($news_item);
		}

	}

}

class ContactTableSeeder extends Seeder {

	public function run() {

		DB::table('contacts')->delete();

		$contacts = [
			['name'=>'sonny', 'email'=>'sonnylazuardi@gmail.com', 'subject'=>'Lorem ipsum', 'message'=>'Lorem ipsum'],
			['name'=>'alif', 'email'=>'alifradityar@gmail.com', 'subject'=>'Lorem ipsum', 'message'=>'Lorem ipsum'],
		];

		foreach ($contacts as $contact) {
			Contact::create($contact);
		}

	}

}

class SettingTableSeeder extends Seeder {

	public function run() {

		DB::table('settings')->delete();

		$settings = [
			['key'=>'home_picture', 'value'=>'files/home.jpg', 'text' => ''],
			['key'=>'history', 'value'=>'', 'text'=>'Lorem ipsum dolor sit amet'],
		];

		foreach ($settings as $setting) {
			Setting::create($setting);
		}

	}

}