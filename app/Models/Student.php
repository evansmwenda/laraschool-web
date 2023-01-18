<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','grade_id'];

    public function user() {
        return $this->morphOne('App\User', 'userable');
    }

    //belongs to one grade
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
