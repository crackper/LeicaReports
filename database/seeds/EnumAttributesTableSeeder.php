<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 15/04/15
 * Time: 9:29 AM
 */

use \Illuminate\Database\Seeder;

class EnumAttributesTableSeeder extends Seeder {
    public function run(){
        DB::table('enum_attributes')->delete();

        $enums = array(
            ['id'=> 1,'enum_class'=>'ExamenMedico','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 2,'enum_class'=>'Fotocheck','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 3,'enum_class'=>'Monitoreo','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id'=> 4,'enum_class'=>'Cargo','created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        DB::table('enum_attributes')->insert($enums);
    }
} 