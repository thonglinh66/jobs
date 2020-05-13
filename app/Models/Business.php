<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'code',
        'name',
        'address',
        'decription',
        'mail',
        'phone',
        'website',
        'facebook',
        'twitter',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
}
