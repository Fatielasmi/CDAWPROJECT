<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playList extends Model
{
    protected $table = 'playlist';
    protected $primaryKey = 'id';
    protected $fillable = ['name','user_id'];
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
