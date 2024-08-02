<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AddAdminUser extends Migration {
    public function up() {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'bw060010@gmail.com', // Replace with your email
            'password' => Hash::make('4ZwjJLX9ng7&5YS&DF3c'), // Replace with your desired password
        ]);
    }

    public function down() {
        // Remove admin user
        User::where('email', 'admin@example.com')->delete();
    }
}
