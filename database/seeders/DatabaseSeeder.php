<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@eventbook.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Demo User',
            'email' => 'demo@eventbook.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        Event::create([
            'title' => 'Global AI & Agentic Systems Summit 2026',
            'description' => 'Join developers, pipeline architects, neural researchers, and industry founders from all around the world to map out the future of autonomous systems. This summit is a deep dive into active agent networks, orchestration layers, fine-tuning methodologies, and safe model execution environments.',
            'event_date' => '2026-11-08 09:00:00',
            'location' => 'Moscone Center, SF',
            'price' => 299.00,
            'available_seats' => 150,
            'contact_email' => 'summit@nextgentech.com',
            'contact_phone' => '+1 (555) 019-2834',
            'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'Global Rock Arena',
            'description' => 'Experience the heavy synth-rock, live orchestral tracks, and stunning lights display of the decade. Features global rock legends and upcoming indie stars.',
            'event_date' => '2026-10-14 19:30:00',
            'location' => 'Oakland Stadium, CA',
            'price' => 89.00,
            'available_seats' => 200,
            'contact_email' => 'tickets@rockarena.com',
            'contact_phone' => '+1 (555) 018-9900',
            'image' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'Interaction UX Hub Workshop',
            'description' => 'Master dynamic component architectures, design tokens, responsive layout formulas, and sleek micro-interactions step by step with expert coaches.',
            'event_date' => '2026-11-20 10:00:00',
            'location' => 'Design Studio, Seattle',
            'price' => 45.00,
            'available_seats' => 50,
            'contact_email' => 'learn@uxhub.io',
            'contact_phone' => '+1 (555) 017-1234',
            'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'National Golf Cup',
            'description' => 'Witness the championship tournament live from the best seats, featuring prime players in the country. Perfect for outdoor sports enthusiasts.',
            'event_date' => '2026-12-02 08:00:00',
            'location' => 'Pebble Beach Links, CA',
            'price' => 150.00,
            'available_seats' => 100,
            'contact_email' => 'info@golfcup.org',
            'contact_phone' => '+1 (555) 016-5678',
            'image' => 'https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'Acoustic Night Live',
            'description' => 'Unplugged raw sessions with acoustic sets, soft jazz rhythms, and ambient lounge settings. Cozy environment with limited seats.',
            'event_date' => '2026-12-12 20:00:00',
            'location' => 'Melody Lounge, Austin',
            'price' => 35.00,
            'available_seats' => 40,
            'contact_email' => 'events@melodylounge.com',
            'contact_phone' => '+1 (555) 015-4321',
            'image' => 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'Mindfulness Yoga Retreat',
            'description' => 'Immersive group breathing exercises, advanced stretching classes, and mental health workshops. Refresh your body and soul.',
            'event_date' => '2026-12-20 07:00:00',
            'location' => 'Serenity Garden, CA',
            'price' => 25.00,
            'available_seats' => 30,
            'contact_email' => 'hello@serenitygarden.com',
            'contact_phone' => '+1 (555) 014-9988',
            'image' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800&q=80',
        ]);
    }
}
