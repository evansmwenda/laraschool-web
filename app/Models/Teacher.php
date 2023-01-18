<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','department_id'];

    public function user() {
        return $this->morphOne('App\User', 'userable');
    }

    //belongs to one department
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
