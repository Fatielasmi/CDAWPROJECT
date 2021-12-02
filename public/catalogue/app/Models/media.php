<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $table = 'media';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id','type','title','description','year','image'];
    protected $connection = 'mysql';
    use HasFactory;
    
public function users()
{
    return $this->belongsToMany('App\Models\User');
}
public function playlist()
{
    return $this->belongsToMany('App\Models\playList');
}
}
