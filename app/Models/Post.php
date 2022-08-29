<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[ 'name','slug','description','category_id','image','yt-iframe',
    'meta_title','meta_descrition','meta_keyword','navbar_status','status','created_by'
];


    public function category()
{
    return $this->belongsTo(Category::class);
}
}


