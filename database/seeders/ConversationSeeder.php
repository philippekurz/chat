<?php

namespace Database\Seeders;

use App\Models\Conversation;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Conversation::create([
        //     'title' => 'Test Conversations',
        //     'creator_id' => 1,
        //     'interlocuteur1_id' => 2,
        //     'interlocuteur2_id' => 3,
        // ]);

        // Conversation::create([
        //     'title' => 'Another Test Conversations',
        //     'creator_id' => 2,
        //     'interlocuteur1_id' => 3,
        //     'interlocuteur2_id' => 4,
        // ]);
        Conversation::factory(100)->create();
    }
}