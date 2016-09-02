<?php
use Illuminate\Database\Seeder;

use Carbon\Carbon;
class StudentsTableSeeder extends Seeder {

	public function run(){
		$faker = Faker\Factory::create('ru_RU');
		DB::table('student')->insert([
            'first_name' => 'Яaнмaи',
			'last_name' => 'Яомlї',
			'no_phone' => $faker->phoneNumber,
			'city' => $faker->city,
			'address' => $faker->address,
			'postcode' => $faker->postcode,
			'country' => $faker->country,
			'password' => $faker->password,
			'email' => 'rahmanromli@yahoo.com',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
		for ($i=0; $i < 6; $i++) {
			DB::table('student')->insert([
	            'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'no_phone' => $faker->phoneNumber,
				'city' => $faker->city,
				'address' => $faker->address,
				'postcode' => $faker->postcode,
				'country' => $faker->country,
				'password' => $faker->password,
				'email' => $faker->email,
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
		}
	}
}