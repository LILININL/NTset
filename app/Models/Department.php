<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;

    // สร้างฟังก์ชันสำหรับแสดงรายการแผนกทั้งหมด
    public function getAllDepartments()
    {
        return $this->all();
    }

    // สร้างฟังก์ชันสำหรับสร้างแผนกใหม่
    public function createDepartment($data)
    {
        return $this->create($data);
    }

    // สร้างฟังก์ชันสำหรับอัปเดตข้อมูลแผนก
    public function updateDepartment($employeeId, $data)
    {
        return $this->where('employee_id', $employeeId)->update($data);
    }

    // สร้างฟังก์ชันสำหรับลบแผนก
    public function deleteDepartment($employeeId)
    {
        return $this->where('employee_id', $employeeId)->delete();
    }
}
