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
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name     = 'Pablo'; //Str::random(10);
        $user->email    = 'pabloripoll.it@gmail.com';
        $user->password = Hash::make('Pass1234');
        $user->save();
    }
}
