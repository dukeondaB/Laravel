<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'status',
        'image',
        'size_id',
        'cate_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class,'size_id','id');
    }
}