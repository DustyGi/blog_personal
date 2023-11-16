<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = "comment_id";

    protected $fillable = [
        'user_id',
        'article_id',
        'text',
        'comment_father_id'
    ];

    public function article(){
        return $this->belongsTo(Article::class, 'article_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
