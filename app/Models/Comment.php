<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Table name
    protected $table = 'comments';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps= true;
    use HasFactory;
    protected $fillable = ['body','post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
