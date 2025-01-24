<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example reservations
        Reservation::create([
            'event_id' => 1, // Replace with a valid event ID
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'event_details' => 'Looking forward to attending this event.',
        ]);

        Reservation::create([
            'event_id' => 2, // Replace with a valid event ID
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '9876543210',
            'event_details' => 'Need more information about this event.',
        ]);

        Reservation::create([
            'event_id' => 1, // Replace with a valid event ID
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'phone' => '5551234567',
            'event_details' => 'Can I bring a guest to this event?',
        ]);
    }
}
