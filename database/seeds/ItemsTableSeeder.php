<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Item');
        for($i=0; $i<50; $i++) {
            DB::table('items')->insert([
                        'title' => $faker->word(),
                        'description' => ucfirst($faker->sentence()),
                        'img' => 'adimg/R5wMET8cRDFwtlMsPcpqaInULrm9BBfFCD4UIHFn.jpeg',
                        'price' => $faker->numberBetween(10,100),
                        'count' => $faker->numberBetween(10,100),
                        'cat_id' => $faker->numberBetween(1,3),
                        'user_id' => 1,
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now()
                    ]);
        }
            
        
        
    }
}
