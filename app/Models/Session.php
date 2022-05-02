<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'session';
    public static $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    public static $hours = ['9:00','10:30','12:00','14:00','15:30','17:00'];
    protected $fillable = ['day','hour','coach_id','room_id','activity_id'];
    use HasFactory;

    public static function orderedSessions($days,$sessions){
        foreach ($days as $day){
            $tempDay =[];
            foreach ($sessions as $session){
                if ($session->day == $day){
                    $tempDay[$session->hour] = ['hour'=>$session->hour,'coach'=>Coach::find($session->coach_id)->name,'activity'=>Activity::find($session->activity_id)->name,'room'=>$session->room_id,'number'=>$session->activity_id];
                }
            }
            $finalArray[$day] = $tempDay;
        }
        return $finalArray;
    }
}
