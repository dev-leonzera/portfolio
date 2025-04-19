<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            [
                'year_start' => 2020,
                'year_end' => 2024,
                'degree' => 'Bacharelado em Ciência da Computação',
                'university' => 'Universidade Federal de Minas Gerais',
                'description' => 'Formação em Ciência da Computação com foco em desenvolvimento de software, algoritmos e estruturas de dados.',
                'order' => 1
            ],
            [
                'year_start' => 2018,
                'year_end' => 2020,
                'degree' => 'Técnico em Informática',
                'university' => 'Escola Técnica Estadual',
                'description' => 'Curso técnico com ênfase em programação, redes de computadores e manutenção de hardware.',
                'order' => 2
            ],
            [
                'year_start' => 2022,
                'year_end' => null,
                'degree' => 'Pós-graduação em Desenvolvimento Web',
                'university' => 'Instituto de Tecnologia',
                'description' => 'Especialização em desenvolvimento web moderno, incluindo frameworks front-end e back-end.',
                'order' => 3
            ]
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
} 