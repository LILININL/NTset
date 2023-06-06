<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    

<!-- แสดงรายการพนักงานทั้งหมด -->
<table>
    <thead>
        <tr>
            <th>รหัสพนักงาน</th>
            <th>ชื่อ</th>
            <th>วันที่เริ่มทำงาน</th>
            <th>รายละเอียด</th>
            <th>รูปประจำตัวพนักงาน</th>
            <th>การดำเนินการ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->employee_id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->start_date }}</td>
            <td>{{ $employee->details }}</td>
            <td><img src="{{ $employee->profile_image }}" alt="Image" style="max-width: 50px; max-height: 50px; "></td>
            <td>
            <!-- เพิ่มปุ่มแก้ไขและลบ -->
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">แก้ไข</a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
   
</table>
</body>
</html>