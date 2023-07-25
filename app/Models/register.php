<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $table='_register';
    protected $fillable=['FirstName','LasstName','Gender','Date_of_Birth','PhoneNumber','email','Country','state','city','Hobbies','image'];
    

}
