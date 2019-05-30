@extends('layouts.app')

@section('title','ตารางกิจกรรม ภาวิชาอายุรศาสตร์')

@include('layouts.nevbar')

<div class="container">
    <div>
      <h3 style="color:#2C3E50" >ปฎิทินกิจกรรม</h3> 

    </div>

@section('content')

<table class="table table-hover" align="center">
  <thead>
    <tr>
      <th scope="col">วันที่</th>
      <th scope="col">ชื่อกิจกรรม</th>
      <th scope="col">สถานที่</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>27 พฤษภาคม 2562</td>
      <td>Morning Report</td>
      <td>ห้องประชุมจงจินต์ ตึกธนาคารไทยพาณิชย์ ชั้น 1</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">ลบ</button>
        <button type="button" class="btn btn-warning btn-sm">แก้ไข</button>
        <button type="button" class="btn btn-success btn-sm">ยืนยัน</button>
      </td>
    </tr>
    <tr>
      <td>28 พฤษภาคม 2562</td>
      <td>Morning Report</td>
      <td>ห้องประชุมจงจินต์ ตึกธนาคารไทยพาณิชย์ ชั้น 1</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">ลบ</button>
        <button type="button" class="btn btn-warning btn-sm">แก้ไข</button>
        <button type="button" class="btn btn-success btn-sm">ยืนยัน</button>
      </td>
    </tr>
    <tr>
      <td>29 พฤษภาคม 2562</td>
      <td>Medical Conferance</td>
      <td>ห้องประชุมจงจินต์ ตึกอัษฎางค์ ชั้น 4</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">ลบ</button>
        <button type="button" class="btn btn-warning btn-sm">แก้ไข</button>
        <button type="button" class="btn btn-success btn-sm">ยืนยัน</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
@endsection


