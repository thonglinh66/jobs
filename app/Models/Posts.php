<?php



namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'code',
        'member',
        'title',
        'pdecription',
        'type',
        'min_salary',
        'max_salary',
        'deadline',
        'created_at',
        'updated_at',
        'deleted_at', 
    ];
    public $timestamps = true;
   
}

