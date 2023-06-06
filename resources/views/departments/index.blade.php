<!-- แสดงรายการแผนกทั้งหมด -->
<table>
    <thead>
        <tr>
            <th>รหัสพนักงาน</th>
            <th>แผนก</th>
            <th>ตำแหน่ง</th>
            <th>อื่นๆ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->employee_id }}</td>
            <td>{{ $department->department }}</td>
            <td>{{ $department->position }}</td>
            <td>{{ $department->others }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
