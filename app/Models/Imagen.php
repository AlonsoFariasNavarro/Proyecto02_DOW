<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table ='imagenes';
    public $timestamps = false;
    protected $fillable = [
        'cuenta_user',
        'titulo',
        'archivo',
        'baneada',
        'motivo_ban',
    ];

    public function cuenta():BelongTo{
        return $this->belongTo(Cuenta::class);
    }
}
