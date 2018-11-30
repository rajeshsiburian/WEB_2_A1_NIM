<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('employee')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'email' => $faker->unique()->username, //email unique sehingga tidak ada yang sama
                'password' => $faker->password,
                'companyEmail' => $faker->companyEmail,
            ]);
        }
    }
}
