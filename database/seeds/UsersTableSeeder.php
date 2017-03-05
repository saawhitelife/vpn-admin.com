<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        App\User::truncate();
        DB::statement("SET foreign_key_checks=1");

        $faker = Faker\Factory::create();

        $users_limit = $faker->numberBetween(10, 20);

        $companies = App\Company::all();

        foreach ($companies as $company)
        {
            for ($i = 1; $i <= $users_limit; $i++)
            {
                DB::table('users')->insert([ //,
                    'user_name' => $faker->name(),
                    'company_id' => $company->company_id,
                    'user_email' => $faker->unique()->email(),
                    'created_at' => $faker->dateTimeBetween($startDate = $company->created_at, $endDate = 'now'),
                ]);
            }
        }
    }
}
