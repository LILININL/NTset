@extends('layouts.app')

@section('content')
    <h1>เพิ่มข้อมูลพนักงาน</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <!-- รายละเอียดฟิลด์เพิ่มที่นี่ -->
    </form>
@endsection
