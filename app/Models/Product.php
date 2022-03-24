<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $with = [
        'type',
        'category',
        'media',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
