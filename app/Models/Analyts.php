<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analyts extends Model
{
    protected $table = 'analyts';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'applyst',
        'success',
        'percent',
    ];
    public $timestamps = true;
}
