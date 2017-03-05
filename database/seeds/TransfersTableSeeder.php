<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{
    /**
     * Generate transfer
     *
     * return String transfer in bytes
     */
    public function generate_transfer()
    {
        $transfer = '1';
        $digits_count = rand(2, 13);
        for ($i = 1; $i <= $digits_count; $i++)
        {
            $transfer .= rand(0, 9);
        }
        return $transfer;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        App\Transfer::truncate();

        $users = App\User::with('company')->get();

        foreach ($users as $user)
        {
            $transfers_limit = $faker->numberBetween(50, 500);
            for ($i = 1; $i <= $transfers_limit; $i++)
            {
                DB::table('transfers')->insert([ //,
                    'transferred_data' => self::generate_transfer(),
                    'user_id' => $user->user_id,
                    'company_id' => $user->company->company_id,
                    'transfer_resource' => $faker->url(),
                    'transfer_datetime' => $faker->dateTimeInInterval($startDate = $user->created_at, $interval = '+ 6 month'),
                ]);
            }
        }
    }
}