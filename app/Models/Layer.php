<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $layers = ['deleted_at'];
    protected $fillable = [
        'image'
    ];
}
