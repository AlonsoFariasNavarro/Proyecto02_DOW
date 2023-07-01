<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuentas')->insert([
            ['user'=>'T000bbbaallll','password'=>Hash::make('123'),'nombre'=>'Cristobal','apellido'=>'Macalapu','perfil_id'=>2],
            ['user'=>'aloncho','password'=>Hash::make('123'),'nombre'=>'Alonso','apellido'=>'Farias','perfil_id'=>2],
            ['user'=>'brad_pit','password'=>Hash::make('123'),'nombre'=>'brad','apellido'=>'pitt','perfil_id'=>2],
            
        ]);
        
    }
}
