<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
