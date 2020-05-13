<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'codePC',
        'title',
        'decription',
        'location',
        'type',
        'min_salary',
        'max_salary',
        'language',
        'deadline',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
}
