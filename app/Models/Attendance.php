<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    use HasFactory;

   protected $fillable = ['id', 'employee_id', 'shedule_id', 'checkin', 'checkout', 'working_hours'];

   public function from()
   {
     return $this->belongsTo('App\Models\Employee', 'employee_id');
   }

}
