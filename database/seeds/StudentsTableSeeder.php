<?php
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder {

	public function run(){
		$faker = Faker\Factory::create();
		DB::table('student')->insert([
            'first_name' => 'Rahman',
			'last_name' => 'K',
			'password' => $faker->password,
			'email' => 'rahmanromli@yahoo.com',
        ]);
		for ($i=0; $i < 10; $i++) {
			DB::table('student')->insert([
	            'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'password' => $faker->password,
				'email' => $faker->email,
	        ]);
		}
	}
}