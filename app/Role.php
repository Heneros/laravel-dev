<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =  [
        'project_id',
        'user_id'

];
public function users(){
    return $this->hasMany('App\Users');
}
}
