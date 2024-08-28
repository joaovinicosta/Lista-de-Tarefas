<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefa;
use Faker\Factory as Faker;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $tarefas = [
            'Comprar mantimentos',
            'Estudar para o exame',
            'Fazer exercício físico',
            'Preparar o jantar',
            'Limpar a casa',
            'Terminar o projeto',
            'Ler um livro',
            'Assistir a um filme',
            'Organizar documentos',
            'Fazer compras online'
        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create([
                'nome' => $tarefa,
            ]);
        }
    }
}
