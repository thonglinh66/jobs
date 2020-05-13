<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'address',
        'mail',
        'phone',
        'website',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
}
