<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;   

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = [
        'comment',
        'user_id',
        'post_id'
    ];

    // To obtain commenting user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   // To obtain post where comment is commented
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
