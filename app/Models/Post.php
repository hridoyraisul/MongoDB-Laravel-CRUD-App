<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'id',
        'title',
        'description',
    ];
}
