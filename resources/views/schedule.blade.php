@extends('layouts.app')

@section('title','ตารางกิจกรรม ภาวิชาอายุรศาสตร์')

@include('layouts.nevbar')

@section('head','ปฏิทินกิจกรรม')

@section('content')
<table class="table table-hover" align="center">
  <thead>
    <tr>
      <th scope="col">วันที่</th>
      <th scope="col">ชื่อกิจกรรม</th>
      <th scope="col">สถานที่</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>27 พฤษภาคม 2562</td>
      <td>Morning Report</td>
      <td>ห้องประชุมจงจินต์ ตึกธนาคารไทยพาณิชย์ ชั้น 1</td>
    </tr>
    <tr>
      <td>28 พฤษภาคม 2562</td>
      <td>Morning Report</td>
      <td>ห้องประชุมจงจินต์ ตึกธนาคารไทยพาณิชย์ ชั้น 1</td>
    </tr>
    <tr>
      <td>29 พฤษภาคม 2562</td>
      <td>Medical Conferance</td>
      <td>ห้องประชุมจงจินต์ ตึกอัษฎางค์ ชั้น 4</td>
    </tr>
  </tbody>
</table>
@endsection


