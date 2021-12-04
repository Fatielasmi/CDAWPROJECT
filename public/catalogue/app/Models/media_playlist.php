<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media_playlist extends Model
{
    protected $table = 'media_playlist';
    protected $primaryKey = ['media_id','playlist_id'];
    protected $connection = 'mysql';
    use HasFactory;
    

}
