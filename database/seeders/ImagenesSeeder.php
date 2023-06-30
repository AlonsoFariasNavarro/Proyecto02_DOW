<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imagenes')->insert([
            ['titulo'=>'toal','archivo'=>'nose','baneada'=>false,'motivo_ban'=>'muy sexi','cuenta_user'=>'T000bbbaallll'],
            ['titulo'=>'loncho','archivo'=>'nosex2','baneada'=>false,'motivo_ban'=>'belleza','cuenta_user'=>'aloncho'],
            ['titulo'=>'brrrad','archivo'=>'nosex3','baneada'=>false,'motivo_ban'=>'desconocido','cuenta_user'=>'brad_pit'],
      
            
        ]);
    }
}
