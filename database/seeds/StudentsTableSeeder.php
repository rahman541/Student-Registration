<?php
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder {

	public function run(){
		$faker = Faker\Factory::create('ru_RU');
		DB::table('student')->insert([
            'first_name' => 'Rahman',
			'last_name' => 'K',
			'no_phone' => $faker->phoneNumber,
			'city' => $faker->city,
			'address' => $faker->address,
			'postcode' => $faker->postcode,
			'country' => $faker->country,
			'password' => $faker->password,
			'email' => 'rahmanromli@yahoo.com',
        ]);
		for ($i=0; $i < 10; $i++) {
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
	        ]);
		}
	}
}