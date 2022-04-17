<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rest extends Model
{
    use HasFactory;
    // 一体多リレーション
    protected $fillable = [
        'user_id',
        'attendace_id',
        'rests_start',
        'rests_end'];
}
