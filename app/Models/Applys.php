<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applys extends Model
{
    protected $table = 'applys';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'code',
        'code_SV',
        'PostID',
        'content_AP',
        'CV',
    ];
    public $timestamps = true;
}
