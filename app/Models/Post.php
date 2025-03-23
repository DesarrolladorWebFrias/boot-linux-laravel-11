<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
use HasFactory;

    protected $fillable = ['title', 'slug', 'descripcion', 'content','image','category_id', 'posted'];

    //SE CREA LA RELACION POR MEDIO DE FUNCIONES DE ELOQUEN
    
    public function category() {
         return $this->belongsTo(Category::class);

    }
        
    

}
