<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuentas')->insert([
            ['user'=>'T000bbbaallll','password'=>'12345','nombre'=>'Cristobal','apellido'=>'Macalapu','perfil_id'=>1],
            ['user'=>'aloncho','password'=>'123456','nombre'=>'Alonso','apellido'=>'Farias','perfil_id'=>2],
            ['user'=>'brad_pit','password'=>'1234567','nombre'=>'brad','apellido'=>'pitt','perfil_id'=>3],
            
        ]);
        
    }
}
