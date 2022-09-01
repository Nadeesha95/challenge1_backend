<?php

namespace App\Imports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;

class AttendanceImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }


    public function model(array $row)
    {
       
    
        return new Attendance([
          
           'employee_id' =>$row[0],
           'shedule_id' =>$row[1],
           'checkin' => $this->transformDate($row[2]),
           'checkout' =>$this->transformDate($row[3]),

        ]);
    }
}
