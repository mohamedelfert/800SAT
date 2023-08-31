<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('/uploads/articles/' . $this->image);
    }
}
