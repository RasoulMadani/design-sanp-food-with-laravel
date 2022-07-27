<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PermissionsDemoSeeder;
use App\Models\User;
use App\Models\Image;
use App\Models\Ghaza;
use App\Models\Restaurant;
use App\Models\Address;
use App\Models\Category;
use App\Models\Phone;
use App\Models\Menu;
use App\Models\Coupon;

class DatabaseSeeder extends Seeder
{
    /** 
     * Seed the application's database. 
     * 
     * @return void 
     */ 
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $this->call(PermissionsDemoSeeder::class);
        // \App\Models\Category::factory(10)->create();
        // \App\Models\Coupon::factory(10)->create();
        // create demo users
        $user = \App\Models\User::factory()->create([
            'firstName' => 'Example User',
            'lastName' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole('Super-Admin');

        $user = \App\Models\User::factory()->create([
            'firstName' => 'Example Super-Admin User',
            'lastName' => 'Example Super-Admin User',
            'email' => 'ghasem@soleimani.ir',
            'password' => 'Aa123456',
        ]);
        $user->assignRole('buyer');

        // $users = User::factory(5)
        //     ->hasFoods(5)
        //     ->hasRestaurants(2)
        //     ->hasAddresses(1)
        //     ->hasPhones(1)
        //     ->create();
        // foreach ($users as $user) {
        //     $user->assignRole('seller');
        // }
        // $i = 0;
        // $images = Image::factory(25)->create();
        // $foods = Food::all();
        // foreach ($images as $image) {
        //     $image->foods()->save($foods[$i]);
        //     $i++;
        // }

        // $i = 0;
        // $restaurant = Restaurant::all();
        // $imagesRestaurant = Image::factory(10)->create();
        // foreach ($imagesRestaurant as $image) {
        //     $image->restaurants()->save($restaurant[$i]);
        //     $i++;
        // }
        $users = User::factory(5)->has(
            Ghaza::factory(5)->has( 
                Category::factory()->suspended()
            ) 
        )->hasPhones(1)->hasAddresses(1)->has(
            Restaurant::factory(rand(2, 4))
                ->has(
                    Category::factory()
                )->has(
                    Image::factory(rand(3, 7))
                )->has(
                    Address::factory()
                )->has(
                    Phone::factory()
                )
                ->has(
                    Menu::factory(5)
                        ->has(
                            Ghaza::factory()
                        )->has(
                            Coupon::factory()
                        )
                )
        )->create();
        foreach ($users as $user) {
            $user->assignRole('seller');
        }
    }
}
