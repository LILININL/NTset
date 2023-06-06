<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;

    // สร้างฟังก์ชันสำหรับแสดงรายการพนักงานทั้งหมด
    public function getAllEmployees()
    {
        return $this->all();
    }

    // สร้างฟังก์ชันสำหรับสร้างพนักงานใหม่
    public function createEmployee($data)
    {
        return $this->create($data);
    }

    // สร้างฟังก์ชันสำหรับอัปเดตข้อมูลพนักงาน
    public function updateEmployee($employeeId, $data)
    {
        return $this->where('employee_id', $employeeId)->update($data);
    }

    // สร้างฟังก์ชันสำหรับลบพนักงาน
    public function deleteEmployee($employeeId)
    {
        return $this->where('employee_id', $employeeId)->delete();
    }
}
