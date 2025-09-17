<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'category_id',
        'category_name',
        'page_seo',
        'title',
        'sub_title',
        'description',
        'author',
        'publish_time',
        'status',
        'project_image',
        'author_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
