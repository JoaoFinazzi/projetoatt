<?php

use Illuminate\Database\Seeder;
use App\Categoria_ped;

class Categoria_pedSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria_ped::insert(['assunto_ped' => 'Capacitação']);
        Categoria_ped::insert(['assunto_ped' => 'Configurar atividades']);
        Categoria_ped::insert(['assunto_ped' => 'Importar conteúdo']);
        Categoria_ped::insert(['assunto_ped' => 'Outros']);
        Categoria_ped::insert(['assunto_ped' => 'Problemas de acesso']);
        Categoria_ped::insert(['assunto_ped' => 'Relatório de notas']);        
    }
}
