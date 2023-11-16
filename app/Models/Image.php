<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $primaryKey = "image_id";

    protected $fillable = [
        'article_id',
        'url',
        'filename'
    ];

    public $timestamps = false;

    public function article(){
        return $this->belongsTo(Article::class, 'article_id');
    }
}
