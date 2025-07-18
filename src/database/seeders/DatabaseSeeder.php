<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WeightTarget;
use App\Models\WeightLog;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'テスト太郎',
            'email' => 'test@test.com',
            'password' => Hash::make('password123')
        ]);
        WeightTarget::factory()->create(['user_id' => $user->id]);
        WeightLog::factory(35)->create(['user_id' => $user->id]);
    }
}
