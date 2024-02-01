<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\autor;

class libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor_id',
        'editorial_id',
        'anio_publicado',
        'num_de_pag',
        'precio',
        'disponibilidad',
        'genero_id'
    ];

    public function autor(){
        return $this->belongsTo(autor::class);
    }





    public $timestamps = false;
}
