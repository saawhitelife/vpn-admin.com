<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Generate quota
     *
     * return String quota in bytes
     */
    public function generate_quota()
    {
        $quota = '1';
        $digits_count = rand(10, 16);
        for ($i = 1; $i <= $digits_count; $i++)
        {
            $quota .= rand(0, 9);
        }
        return $quota;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        App\Company::truncate();
        DB::statement("SET foreign_key_checks=1");

        $faker = Faker\Factory::create();

        $companies_limit = $faker->numberBetween(5, 20);

        for ($i = 1; $i <= $companies_limit; $i++)
        {
            DB::table('companies')->insert([ //,
                'company_quota' => self::generate_quota(),
                'company_name' => $faker->company(),
                'created_at' => $faker->dateTimeBetween($startDate = '-6 month', $endDate = 'now'),
            ]);
        }
    }
}
