@extends('layouts.app')

@section('content')
    <h1>แก้ไขข้อมูลพนักงาน</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- รายละเอียดฟิลด์แก้ไขที่นี่ -->
    </form>
@endsection
