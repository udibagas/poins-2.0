<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'fc',
        'is_utama',
        'mt_per_bucket_lo',
        'mt_per_bucket_hi'
    ];
}
