<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->confirm('truncate first ?', true);
        
        User::truncate();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.id',
            'password' => bcrypt('12345678'),
            'telpon' => '081234567890',
            'alamat' => 'Jl. Samarinda',
            
        ]);

        
    }
}
