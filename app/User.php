<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id', 'id');
    }
}
