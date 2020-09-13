<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trendings extends Model
{
    protected $table = 'trendings';

    protected $primaryKey = 'keyname';

    protected $keyType = 'string';

    protected $fillable = [
        'keyname',
        'count',
        'image',
    ];
    public $timestamps = true;
}
