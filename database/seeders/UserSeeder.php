<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Contact
};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Faraz',
            'email'=>'abc@gmail.com',
            'password'=>bcrypt('password')
        ]);
        Contact::create([
            'user_id'=>1,
            'phone_no'=>'0987654321',
            'address'=>'Delhi'
        ]);
    }
}
