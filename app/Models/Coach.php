<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coach';
    protected $fillable=['name','code','email','phone','speciality','picture'];
    use HasFactory;
}
