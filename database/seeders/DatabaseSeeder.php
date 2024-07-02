<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'phone' => '000',
            'JMBG' => '000',
            'email' => 'admin@gmail.com',
            'role' => 'ADMIN'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user'
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'moderator',
            'username' => 'moderator',
            'email' => 'moderator@gmail.com',
            'role' => 'MODERATOR'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'moderator2',
            'username' => 'moderator2',
            'email' => 'moderator2@gmail.com',
            'role' => 'MODERATOR'
        ]);
        \App\Models\Theme::factory()->create([
            'name' => 'Tema1',
            'description' => 'Tema 1 description',
            'approve_status' => 'APPROVED',
            'user_id' => 3
        ]);
        \App\Models\Theme::factory()->create([
            'name' => 'Tema2',
            'description' => 'Tema 2 description',
            'approve_status' => 'PENDING',
            'user_id' => 3
        ]);
        \App\Models\Theme::factory()->create([
            'name' => 'Tema3',
            'description' => 'Tema 3 description',
            'approve_status' => 'APPROVED',
            'user_id' => 3
        ]);
        
        $themes = \App\Models\Theme::all();

        $usersAndModerators = \App\Models\User::where('role', 'MODERATOR')
            ->orWhere('role', 'user')
            ->get();

        foreach ($themes as $theme) {
            for ($i = 0; $i < random_int(2, 5); $i++) {
                \App\Models\Discussion::factory()->create([
                    'user_id' => $usersAndModerators->random()->id,
                    'theme_id' => $theme->id
                ]); 
            }
        }

        $discussions = \App\Models\Discussion::all();

        foreach ($discussions as $discussion) {
            for ($i = 0; $i < random_int(5, 10); $i++) {
                \App\Models\Comment::factory()->create([
                    'user_id' => $usersAndModerators->random()->id,
                    'discussion_id' => $discussion->id,
                ]);
            }
        }

        $comments = \App\Models\Comment::all();

        foreach ($comments as $comment) {
            for ($i = 0; $i < random_int(0, 6); $i++) {
                \App\Models\Reply::factory()->create([
                    'user_id' => $usersAndModerators->random()->id,
                    'comment_id' => $comment->id,
                ]);
            }
        }




    }
}
