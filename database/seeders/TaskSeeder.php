<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Website Redesign taken (project_id = 1)
        Task::create([
            'name' => 'Design mockups',
            'description' => 'Maak Figma mockups voor alle pagina\'s',
            'project_id' => 1
        ]);

        Task::create([
            'name' => 'Frontend development',
            'description' => 'Zet het design om in HTML/CSS/JavaScript',
            'project_id' => 1
        ]);

        Task::create([
            'name' => 'Backend integration',
            'description' => 'Integreer frontend met backend API',
            'project_id' => 1
        ]);

        // Mobile App Development taken (project_id = 2)
        Task::create([
            'name' => 'Requirements gathering',
            'description' => 'Verzamel alle requirements van stakeholders',
            'project_id' => 2
        ]);

        Task::create([
            'name' => 'iOS development',
            'description' => 'Ontwikkel iOS app in Swift',
            'project_id' => 2
        ]);

        Task::create([
            'name' => 'Android development',
            'description' => 'Ontwikkel Android app in Kotlin',
            'project_id' => 2
        ]);

        Task::create([
            'name' => 'Testing & QA',
            'description' => 'Test beide apps op bugs en performance',
            'project_id' => 2
        ]);

        // Database Optimization taken (project_id = 3)
        Task::create([
            'name' => 'Performance analysis',
            'description' => 'Analyseer huidige query performance',
            'project_id' => 3
        ]);

        Task::create([
            'name' => 'Index optimization',
            'description' => 'Voeg database indices toe voor snellere queries',
            'project_id' => 3
        ]);

        // API Integration taken (project_id = 4)
        Task::create([
            'name' => 'Documentation review',
            'description' => 'Lees documentatie van third-party APIs',
            'project_id' => 4
        ]);

        Task::create([
            'name' => 'API wrapper development',
            'description' => 'Maak wrapper classes voor de APIs',
            'project_id' => 4
        ]);

        // Security Audit taken (project_id = 5)
        Task::create([
            'name' => 'Vulnerability scan',
            'description' => 'Scan code voor beveiligingsgaten',
            'project_id' => 5
        ]);

        Task::create([
            'name' => 'Penetration testing',
            'description' => 'Voer penetration tests uit',
            'project_id' => 5
        ]);
    }
}
