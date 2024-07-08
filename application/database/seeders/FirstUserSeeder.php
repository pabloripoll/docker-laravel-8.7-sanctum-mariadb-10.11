<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     * php artisan db:seed --class=FirstUserSeeder
     * 
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->user     = 'adminuser@apistore.com';
        $user->password = Hash::make('Pass1234');
        $user->email    = 'adminuser@apistore.com';
        $user->name     = 'Jhon Doe'; //Str::random(10);
        $user->save();
    }
}
