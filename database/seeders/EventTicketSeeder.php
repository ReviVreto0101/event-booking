<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Ticket;

class EventTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Event 1
        $event1 = Event::create([
            'name' => 'A. R. Rahman Festival 2023',
            'description' => 'A music festival by A. R. Rahman.',
            'event_date' => '2023-12-25 18:00:00',
            'location' => 'Venue 1',
        ]);

        Ticket::create([
            'event_id' => $event1->id,
            'ticket_type' => 'VIP',
            'price' => 100.00,
            'available_qty' => 50,
        ]);

        Ticket::create([
            'event_id' => $event1->id,
            'ticket_type' => 'Regular',
            'price' => 50.00,
            'available_qty' => 200,
        ]);

        // Event 2
        $event2 = Event::create([
            'name' => 'Jazz Night 2023',
            'description' => 'A soulful night of jazz music.',
            'event_date' => '2023-11-15 19:30:00',
            'location' => 'Venue 2',
        ]);

        Ticket::create([
            'event_id' => $event2->id,
            'ticket_type' => 'Premium',
            'price' => 120.00,
            'available_qty' => 30,
        ]);

        Ticket::create([
            'event_id' => $event2->id,
            'ticket_type' => 'Standard',
            'price' => 60.00,
            'available_qty' => 150,
        ]);

        // Event 3
        $event3 = Event::create([
            'name' => 'Tech Conference 2023',
            'description' => 'An engaging conference for tech enthusiasts.',
            'event_date' => '2023-10-05 09:00:00',
            'location' => 'Venue 3',
        ]);

        Ticket::create([
            'event_id' => $event3->id,
            'ticket_type' => 'Early Bird',
            'price' => 80.00,
            'available_qty' => 100,
        ]);

        Ticket::create([
            'event_id' => $event3->id,
            'ticket_type' => 'General Admission',
            'price' => 100.00,
            'available_qty' => 200,
        ]);
    }
}
