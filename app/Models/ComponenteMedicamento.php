<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponenteMedicamento extends Model
{
    use HasFactory;
    
    protected $table = "Componentes_medicamentos";
    protected $primaryKey = 'id'; // or null
}
