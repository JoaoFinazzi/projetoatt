<?php

use Illuminate\Database\Seeder;

class AtendimentoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atendimento::insert(['assunto' => 'Dúvidas', 	'comentario' => 'Tire suas dúvidas agora mesmo!']);
        Atendimento::insert(['assunto' => 'Sugestões', 	'comentario' => 'Gostaria de sugerir algo?']);
        Atendimento::insert(['assunto' => 'Outros', 	'comentario' => 'Qualquer outro tipo de assunto']);
    }
}
