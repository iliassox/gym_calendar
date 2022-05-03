<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'session';
    public static $days = ['Monday' => '2022-04-11',
        'Tuesday' => '2022-04-12',
        'Wednesday' => '2022-04-13',
        'Thursday' => '2022-04-14',
        'Friday' => '2022-04-15',
        'Saturday' => '2022-04-16'];
    public static $date = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    protected $fillable = ['day','hour','coach_id','room_id','activity_id','end'];
    use HasFactory;
}
