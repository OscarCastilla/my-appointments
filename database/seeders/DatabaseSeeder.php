<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {

        DB::table('users')->insert([
        
            'name' => 'Oscar Castilla',
            'email' => 'oscarcastillaponce@gmial.com',
            
            'password' => bcrypt('oscar420'), // password
            'dni'=>'323232323',
            'address'=> '',
            'phone'=>'',
            'role'=>'admin'

        ]);
        User::factory(50)->create();
        
    }
}
