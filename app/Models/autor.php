<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\libro;
class autor extends Model
{
    use HasFactory;

    protected $table = 'autors';

    public function libro(){
        return $this->hasMany(libro::class);
    }

}
