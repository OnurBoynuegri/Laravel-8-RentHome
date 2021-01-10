<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=[
        'parent',
    ];
    #One To Many
    public function houses()
    {
        return $this->hasMany(House::class);
    }
    #One To Many Reverse -Tersi
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #One To Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

}
