<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    protected $table = 'abonnement';
    protected $primaryKey = ['playlist_id','user_id'];
    protected $connection = 'mysql';
    use HasFactory;
    

}