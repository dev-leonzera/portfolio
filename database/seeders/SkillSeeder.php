<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            [
                'name' => 'Laravel',
                'order' => 1,
                'icon' => 'laravel',
                'description' => 'Framework PHP para desenvolvimento web',
                'percentage' => 90
            ],
            [
                'name' => 'PHP',
                'order' => 2,
                'icon' => 'php',
                'description' => 'Linguagem de programação para web',
                'percentage' => 95
            ],
            [
                'name' => 'JavaScript',
                'order' => 3,
                'icon' => 'javascript',
                'description' => 'Linguagem de programação para frontend',
                'percentage' => 85
            ],
            [
                'name' => 'Vue.js',
                'order' => 4,
                'icon' => 'vue',
                'description' => 'Framework JavaScript para interfaces',
                'percentage' => 80
            ],
            [
                'name' => 'MySQL',
                'order' => 5,
                'icon' => 'mysql',
                'description' => 'Sistema de gerenciamento de banco de dados',
                'percentage' => 90
            ],
            [
                'name' => 'HTML',
                'order' => 6,
                'icon' => 'html',
                'description' => 'Linguagem de marcação para web',
                'percentage' => 95
            ],
            [
                'name' => 'CSS',
                'order' => 7,
                'icon' => 'css',
                'description' => 'Linguagem de estilização para web',
                'percentage' => 90
            ],
            [
                'name' => 'Tailwind CSS',
                'order' => 8,
                'icon' => 'tailwind',
                'description' => 'Framework CSS utilitário',
                'percentage' => 85
            ],
            [
                'name' => 'Git',
                'order' => 9,
                'icon' => 'git',
                'description' => 'Sistema de controle de versão',
                'percentage' => 90
            ],
            [
                'name' => 'Docker',
                'order' => 10,
                'icon' => 'docker',
                'description' => 'Plataforma de containerização',
                'percentage' => 75
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
} 