<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastry extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'category_id',
        'title',
        'recipe',
        'notes',
        'image'
    ];

}
