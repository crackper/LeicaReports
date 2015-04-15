<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 14/04/15
 * Time: 4:27 PM
 */

use \Illuminate\Database\Seeder;

class ExamenMedicoTableSeeder extends Seeder {

    public function run(){

        DB::table('examen_medico')->delete();

        $examenes = array(
            ['id'=> 1,'nombre'=>'Ex. Med. Ocupacional Anual (EMOA)','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 2,'nombre'=>'Ex. Med. Ocupacional Retiro (EMOR)','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 3,'nombre'=>'Ex. Med. Pre. Ocupacional (EMPO)','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 4,'nombre'=>'Ex. Med. Altura Física (EMAF)','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 5,'nombre'=>'Ex. Med. Altura Geográfica (EMAG)','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 6,'nombre'=>'Ex. Med. Dermatológico','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 7,'nombre'=>'Ex. Med. Psicológico','descripcion'=>'','created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        DB::table('examen_medico')->insert($examenes);
    }
} 