<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;



    public function perfil():BelongTo{
        return $this->belongTo(Perfil::class);
    }

    public function imagenes():HasMany{
        return $this->hasMany(Imagen::class);
    }
}
