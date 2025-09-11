<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setup extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'seo_header',
        'script',
    ];

    public static function getFirstSetup()
    {
        return self::find(1);
    }
}
