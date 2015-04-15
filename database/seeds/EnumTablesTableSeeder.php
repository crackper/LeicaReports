<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 15/04/15
 * Time: 9:01 AM
 */

use  \Illuminate\Database\Seeder;

class EnumTablesTableSeeder extends Seeder{

    public function run(){
        DB::table('enum_tables')->delete();



        $enums = array(
            ['id'=> 1,'type'=>'ExamenMedico','name'=>'Ex. Med. Ocupacional Anual (EMOA)','symbol'=>'EMOA','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 2,'type'=>'ExamenMedico','name'=>'Ex. Med. Ocupacional Retiro (EMOR)','symbol'=>'EMOR','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 3,'type'=>'ExamenMedico','name'=>'Ex. Med. Pre. Ocupacional (EMPO)','symbol'=>'EMPO','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 4,'type'=>'ExamenMedico','name'=>'Ex. Med. Altura Física (EMAF)','symbol'=>'EMAF','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 5,'type'=>'ExamenMedico','name'=>'Ex. Med. Altura Geográfica (EMAG)','symbol'=>'EMAG','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 6,'type'=>'ExamenMedico','name'=>'Ex. Med. Dermatológico','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 7,'type'=>'ExamenMedico','name'=>'Ex. Med. Psicológico','created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        DB::table('enum_tables')->insert($enums);
    }

}