<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
    {
        public $timestamps = false;
        protected $table = 'users';
        // column sa table
        protected $fillable = ['username', 'password'];

    }
    



?>