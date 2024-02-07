<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $faker = Faker::create('lt_LT'); //pirma reikia sukurti fakeri; idedam LT lokale;  


        foreach (range(1, 20) as $i) {


            DB::table('mechanics')->insert([
                'name' => $faker->firstName,   //Str::random(10) sitas sukonstruoja stringus randominius
                'surname' => $faker->lastName,
            ]);
        }

        foreach (range(1, 100) as $i) {

            $trucksModels = [
                'Volvo',
                'Man',
                'Scania',
                'Mercedes',
                'Iveco',
                'Renault',
                'DAF',
                'Mitsubishi'
            ];

            DB::table('trucks')->insert([
                'brand' => $faker->randomElement($trucksModels),
                'plate' => $faker->regexify('[A-Z]{3}-[0-9]{3}'),
                'mechanic_id' => $faker->numberBetween(1, 20),
            ]);
        }

        foreach (range(1, 53) as $i) {
            $companyName = $faker->company;
            $companyName = str_replace('"', '', $companyName);
            $companyNameParts = explode(' ', $companyName);
            $companyNameWithoutFirstWord = implode(' ', array_slice($companyNameParts, 1));
 
            DB::table('companies')->insert([
                'name' => $companyNameWithoutFirstWord,
                'type' => $faker->companySuffix,
            ]);
        }






        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
