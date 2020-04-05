<?php

use Illuminate\Database\Seeder;

class UserAndListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class,2)->create()->each(function ($user)
        {
           $user->listing()->save(factory(\App\Models\Listing::class)->make());
        });
    }
}
