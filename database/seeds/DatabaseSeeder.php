<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\News;
use App\Contact;
use App\Setting;
use App\Kanal;

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
		$this->call('KanalSeeder');
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

		DB::table('news_images')->delete();
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
			['key'=>'home_maskot', 'value'=>'files/maskot.jpg', 'text'=>''],
		];

		foreach ($settings as $setting) {
			Setting::create($setting);
		}

	}

}

class KanalSeeder extends Seeder 
{
	public function run(){
		DB::table('kanals')->delete();

		$kanals = [
			['title'=> 'Infia Fact', 'category'=> 'Information', 'description' => 'Lorem Ipsum' ,'instagramAccount'=> 'infia_fact', 'color' => '#27aae2', 'instagramId'=> '1302384083', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Infia Health', 'category'=> 'Information', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_health', 'color' => '#27aae2', 'instagramId'=> '1370260777', 'image'=> 'files/kanal/health.png'],
			['title'=> 'Infia Showbiz', 'category'=> 'Information', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_showbiz', 'color' => '#27aae2', 'instagramId'=> '1370275821', 'image'=> 'files/kanal/showbiz.png'],
			['title'=> 'Infia Entrepreneur', 'category'=> 'Information', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_entrepreneur', 'color' => '#27aae2', 'instagramId'=> '1373308993', 'image'=> 'files/kanal/entrepreneur.png'],
			['title'=> 'Infia Tech', 'category'=> 'Information', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_tech', 'color' => '#27aae2', 'instagramId'=> '1373128590', 'image'=> 'files/kanal/tech.png'],
			['title'=> 'Infia Automotive', 'category'=> 'Information', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_automotive', 'color' => '#27aae2', 'instagramId'=> '1606806837', 'image'=> 'files/kanal/fact.png'],
			
			['title'=> 'Dagelan', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'dagelan', 'color' => '#27aae2','instagramId'=> '367005646', 'image'=> 'files/kanal/dagelan.png'],
			['title'=> 'Dagelan TV', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'dagelantv', 'color' => '#27aae2','instagramId'=> '1441085265', 'image'=> 'files/kanal/dagelan.png'],
			['title'=> 'Ramalan Dagelan', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'ramalandagelan', 'color' => '#27aae2','instagramId'=> '1673403429', 'image'=> 'files/kanal/ramalan.png'],
			['title'=> 'Komikin Ajah', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'komikin_ajah', 'color' => '#27aae2','instagramId'=> '1532214774', 'image'=> 'files/kanal/komik.png'],
			['title'=> 'Komik Dagelan', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'komik_dagelan', 'color' => '#27aae2','instagramId'=> '1835929849', 'image'=> 'files/kanal/komik.png'],
			['title'=> 'Sahabat Dagelan', 'category'=> 'Entertainment', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'sahabatdagelan', 'color' => '#27aae2', 'instagramId'=> '1551209130', 'image'=> 'files/kanal/fact.png'],
			
			['title'=> 'Do Dolan', 'category'=> 'E-Commerce', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'do-dolan', 'color' => '#27aae2', 'instagramId'=> '1490731495', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Infia Automarket', 'category'=> 'E-Commerce', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_automarket', 'color' => '#27aae2', 'instagramId'=> '1766823179', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Infia Market', 'category'=> 'E-Commerce', 'description' => 'Lorem Ipsum' , 'instagramAccount'=> 'infia_market', 'color' => '#27aae2', 'instagramId'=> '1771308599', 'image'=> 'files/kanal/sahabat.png'],
			
			['title'=> 'Dailymanly', 'category'=> 'Partner', 'description' => 'Lorem Ipsum' ,'instagramAccount'=> 'dailymanly', 'color' => '#27aae2', 'instagramId'=> '1583428661', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Rahasia Gadis', 'category'=> 'Partner', 'description' => 'Lorem Ipsum' ,'instagramAccount'=> 'rahasiagadis', 'color' => '#27aae2', 'instagramId'=> '1396112706', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Yang Terdalam', 'category'=> 'Partner', 'description' => 'Lorem Ipsum' ,'instagramAccount'=> 'yang_terdalam', 'color' => '#27aae2', 'instagramId'=> '1551910706', 'image'=> 'files/kanal/fact.png'],
			['title'=> 'Bolagila', 'category'=> 'Partner', 'description' => 'Lorem Ipsum' ,'instagramAccount'=> 'bolagila', 'color' => '#27aae2', 'instagramId'=> '1388376735', 'image'=> 'files/kanal/fact.png']
		];

		foreach ($kanals as $kanal) {
			Kanal::create($kanal);
		}
	}
}
