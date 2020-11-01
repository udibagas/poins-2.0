<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentCriteria extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'description'];
}
