<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    protected $table = 'commentaires';
    protected $primaryKey = ['user_id','media_id'];
    protected $fillable = ['text'];
    protected $connection = 'mysql';
    use HasFactory;
    
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function media()
{
    return $this->belongsToMany('App\Models\media');
}
}
