<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['date','time','coach_id','room_id','activity_id'];
    use HasFactory;
}
