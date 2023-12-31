<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = "alticle_id";

    protected $fillable = [
        'user_id',
        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
