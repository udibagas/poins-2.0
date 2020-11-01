<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakdownCategory extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'description_id', 'description_en'];
}
