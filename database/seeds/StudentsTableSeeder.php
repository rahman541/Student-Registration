<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as FakerFactory;
// use Faker\Generator as Generator;
// use Faker\Provider\Internet;

class StudentsTableSeeder extends Seeder {

	public function run(){

		DB::table('student')->delete();
		// $faker = Faker::create();
		$faker = new Faker\Generator();
		$faker->addProvider(new Faker\Provider\en_US\Person($faker));
		$faker->addProvider(new Faker\Provider\Internet($faker));
		$faker->addProvider(new Faker\Provider\en_US\Company($faker));

		foreach(range(1, 3) as $index){
			Student::create([
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'password' => $faker->password,
				'email' => $faker->email,
			]);
		}
	}
}