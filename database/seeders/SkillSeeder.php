<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            // Linguagens
            ['name' => 'PHP', 'category' => 'Linguagens', 'percentage' => 95, 'order' => 1],
            ['name' => 'JavaScript', 'category' => 'Linguagens', 'percentage' => 85, 'order' => 2],
            ['name' => 'TypeScript', 'category' => 'Linguagens', 'percentage' => 80, 'order' => 3],
            ['name' => 'SQL', 'category' => 'Linguagens', 'percentage' => 90, 'order' => 4],
            
            // Frameworks
            ['name' => 'Laravel', 'category' => 'Frameworks', 'percentage' => 95, 'order' => 5],
            ['name' => 'Vue.js', 'category' => 'Frameworks', 'percentage' => 85, 'order' => 6],
            ['name' => 'React', 'category' => 'Frameworks', 'percentage' => 70, 'order' => 7],
            ['name' => 'Express', 'category' => 'Frameworks', 'percentage' => 60, 'order' => 8],
            
            // Banco de Dados
            ['name' => 'MySQL', 'category' => 'Banco de Dados', 'percentage' => 90, 'order' => 9],
            ['name' => 'PostgreSQL', 'category' => 'Banco de Dados', 'percentage' => 85, 'order' => 10],
            ['name' => 'Redis', 'category' => 'Banco de Dados', 'percentage' => 75, 'order' => 11],
            
            // DevOps
            ['name' => 'Docker', 'category' => 'DevOps', 'percentage' => 80, 'order' => 12],
            ['name' => 'Git', 'category' => 'DevOps', 'percentage' => 95, 'order' => 13],
            ['name' => 'Linux', 'category' => 'DevOps', 'percentage' => 85, 'order' => 14],
            
            // Soft Skills
            ['name' => 'Liderança', 'category' => 'Soft Skills', 'percentage' => 90, 'order' => 15],
            ['name' => 'Comunicação', 'category' => 'Soft Skills', 'percentage' => 95, 'order' => 16],
            ['name' => 'Gestão de Tempo', 'category' => 'Soft Skills', 'percentage' => 85, 'order' => 17],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}