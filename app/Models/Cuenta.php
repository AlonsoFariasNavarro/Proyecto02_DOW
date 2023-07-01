<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;



    public function perfil():BelongTo{
        return $this->belongsTo(Perfil::class);
    }

    public function imagenes():HasMany{
        return $this->hasMany(Imagen::class);
    }
}
