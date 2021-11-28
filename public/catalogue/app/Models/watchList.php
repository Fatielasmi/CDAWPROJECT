<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class watchList extends Model
{
    protected $table = 'watchlist';
    protected $primaryKey = ['user_id','media_id'];
    protected $connection = 'mysql';
    use HasFactory;
    

}
