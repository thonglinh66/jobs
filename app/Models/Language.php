<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'name',
        'PostID',
        'code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;

}
