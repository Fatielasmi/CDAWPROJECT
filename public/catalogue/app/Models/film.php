<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $fillable = ['name','category_id','director','path'];
    protected $connection = 'mysql';
    use HasFactory;
}
