<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        $experiences = [
            [
                'company' => 'Freelancer',
                'position' => 'Desenvolvedor Full Stack',
                'description' => 'Desenvolvimento de aplicações web utilizando Laravel, Vue.js, MySQL e outras tecnologias. Implementação de soluções personalizadas para clientes.',
                'year_start' => '2023-01-01',
                'year_end' => null,
                'current' => true,
                'order' => 1
            ],
            [
                'company' => 'Empresa X',
                'position' => 'Desenvolvedor Backend',
                'description' => 'Desenvolvimento e manutenção de APIs RESTful utilizando Laravel. Integração com sistemas legados e implementação de novas funcionalidades.',
                'year_start' => '2022-01-01',
                'year_end' => '2022-12-31',
                'current' => false,
                'order' => 2
            ],
            [
                'company' => 'Empresa Y',
                'position' => 'Desenvolvedor Frontend',
                'description' => 'Desenvolvimento de interfaces responsivas utilizando Vue.js e Tailwind CSS. Implementação de componentes reutilizáveis e otimização de performance.',
                'year_start' => '2021-01-01',
                'year_end' => '2021-12-31',
                'current' => false,
                'order' => 3
            ]
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
} 