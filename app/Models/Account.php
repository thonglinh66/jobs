<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'acounts';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'code',
        'password',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
}
