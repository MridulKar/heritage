<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newslatter extends Model
{
    protected $table = 'newslatters';
    
    
    protected $fillable = ['email'];
}
