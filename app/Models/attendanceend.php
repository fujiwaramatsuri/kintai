<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendanceend extends Model
{
    use HasFactory;
    protected $fillable=["user_id","start_time","date"];
    protected $dates=["start_time"];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
