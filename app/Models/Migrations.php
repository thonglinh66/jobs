<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Migrations extends Model
{
    protected $table = 'migrations';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'migration',
        'batch',
    ];
    public $timestamps = true;
}
