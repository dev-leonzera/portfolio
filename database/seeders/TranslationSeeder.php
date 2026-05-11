<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Models\Education;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Traduzindo Experiências
        Experience::where('position', 'Líder Técnico')->update([
            'position_en' => 'Tech Lead',
            'description_en' => 'I was a manager there, leading technical teams and defining architecture.',
        ]);

        Experience::where('position', 'Desenvolvedor Fullstack')->update([
            'position_en' => 'Fullstack Developer',
            'description_en' => 'Fullstack development using Laravel, Vue.js and modern technologies.',
        ]);

        // Traduzindo Educação
        Education::where('degree', 'Especialização em Arquitetura de Soluções')->update([
            'degree_en' => 'Specialization in Solutions Architecture',
            'description_en' => 'Focused on distributed systems, cloud computing and scalable architectures.',
        ]);

        Education::where('degree', 'MBA em Gestão de Projetos e Processos em TI')->update([
            'degree_en' => 'MBA in IT Project and Process Management',
            'description_en' => 'Management of agile projects, governance and business processes.',
        ]);
    }
}
