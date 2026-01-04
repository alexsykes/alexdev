<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'category',
        'description',
        'filename',
        'uploaded_by',
        'updated_at',
        'deleted_at'
    ];
}
