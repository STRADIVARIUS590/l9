<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
 //   protected $table = 'users';
    use HasFactory;
    
    // protected $fillable = ['name', 'description', 'categoria'];// se almacenan los campos que estan permitidos para almacenar en la bd

    protected $guarded = []; // campos protegidos en la bd. NO se pueden guardar 

    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';
    }
}   

