<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name', 'slug', 'permissions'];

    protected $casts = [
    	'permissions' => 'array'
    ];

    public function users() {
        return $this->belongsToMany('App\User', 'role_users', 'role_id', 'user_id');
    }
}
