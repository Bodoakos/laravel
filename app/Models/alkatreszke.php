<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alkatreszke extends Model
{
    protected $table='alkatresz';
    protected $primaryKey='id';
    protected $fillable=['neve','típus száma'];
}
