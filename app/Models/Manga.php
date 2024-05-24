<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $fillable =['nombre', 'autor','precio'];
    public $timestamps = false;

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }
}
