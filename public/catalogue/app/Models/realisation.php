<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class realisation extends Model
{
    protected $table = 'realisation';
    protected $primaryKey = ['user_id','media_id'];
    protected $connection = 'mysql';
    use HasFactory;
    

}