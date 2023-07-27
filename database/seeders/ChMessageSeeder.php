<?php

namespace Database\Seeders;

use App\Models\ChMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Truncate the table to start fresh
         ChMessage::truncate();

         // User ID 1 as sender with 5 messages
         for ($i = 1; $i <= 2; $i++) {
             ChMessage::create([
                 'from_id' => 1,
                 'to_id' => 2, // Assuming user with ID 2 as the receiver
                 'body' => "Message $i from User 1 to User 2.",
                 'created_at' => now()->subMinutes($i * 5), // Create some time difference for each message
             ]);
         }
 
         // User ID 1 as receiver with 5 messages
         for ($i = 1; $i <= 2; $i++) {
             ChMessage::create([
                 'from_id' => 1, // Assuming user with ID 2 as the sender
                 'to_id' => 3,
                 'body' => "Message $i from User 2 to User 1.",
                 'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
             ]);
         }
         for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 1,
                'to_id' => 4, // Assuming user with ID 2 as the receiver
                'body' => "Message $i from User 1 to User 2.",
                'created_at' => now()->subMinutes($i * 5), // Create some time difference for each message
            ]);
        }

        // User ID 1 as receiver with 5 messages
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 1, // Assuming user with ID 2 as the sender
                'to_id' => 4,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 1, // Assuming user with ID 2 as the sender
                'to_id' => 3,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }



        //user 2

        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 2, // Assuming user with ID 2 as the sender
                'to_id' => 4,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 2, // Assuming user with ID 2 as the sender
                'to_id' => 5,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 5, // Assuming user with ID 2 as the sender
                'to_id' => 2,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        //user 3

        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 3, // Assuming user with ID 2 as the sender
                'to_id' => 7,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 3, // Assuming user with ID 2 as the sender
                'to_id' => 8,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
        for ($i = 1; $i <= 2; $i++) {
            ChMessage::create([
                'from_id' => 8, // Assuming user with ID 2 as the sender
                'to_id' => 3,
                'body' => "Message $i from User 2 to User 1.",
                'created_at' => now()->subMinutes($i * 10), // Create a larger time difference for each message
            ]);
        }
     
    }
}
