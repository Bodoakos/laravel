<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adatka extends Model
{
    protected $table='adatok';
    protected $primaryKey='id';
    protected $fillable=['Márka','Évjárat','km','Max km/h','Üzemanyag'];
   
  
}
