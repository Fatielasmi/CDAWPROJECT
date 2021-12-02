<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participation extends Model
{
    protected $table = 'participation';
    protected $primaryKey = ['user_id','media_id'];
    protected $connection = 'mysql';
    use HasFactory;
    

}
