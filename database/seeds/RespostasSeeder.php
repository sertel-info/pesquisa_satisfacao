<?php

use Illuminate\Database\Seeder;
use App\Models\Respostas;


class RespostasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
   		$class = new Respostas;  
   		$ramais = ['201', '202', '203'];
   		$perguntas = [
   					 ["respostas"=>[1,2]],
   					 ["respostas"=>[1,2]],
   					 ["respostas"=>[1,2,3,4,5]]
   					 ];

   		for($i = 0; $i<20; $i++){
   			$pergunta = rand(0,2);
        $respostas_possiveis = $perguntas[$pergunta]['respostas'];
   			$resposta = $respostas_possiveis[array_rand($respostas_possiveis)];

   			$class->create([
					"ramal"=>$ramais[array_rand($ramais)],
					"resposta"=>$resposta,
					"pergunta"=>$pergunta
   			]);
   		}
   		
    }
}
