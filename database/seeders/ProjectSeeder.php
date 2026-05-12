<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Maak 5 test-projecten aan
        Project::create([
            'name' => 'Website Redesign',
            'description' => 'Compleet herdesign van de bedrijfswebsite met nieuwe UI/UX',
            'days' => 30
        ]);

        Project::create([
            'name' => 'Mobile App Development',
            'description' => 'Ontwikkeling van een iOS en Android app voor klantenbeheer',
            'days' => 60
        ]);

        Project::create([
            'name' => 'Database Optimization',
            'description' => 'Optimaliseren van database queries en performance',
            'days' => 14
        ]);

        Project::create([
            'name' => 'API Integration',
            'description' => 'Integratie van third-party APIs in ons systeem',
            'days' => 21
        ]);

        Project::create([
            'name' => 'Security Audit',
            'description' => 'Volledige beveiligingsaudit en penetration testing',
            'days' => 10
        ]);
    }
}
