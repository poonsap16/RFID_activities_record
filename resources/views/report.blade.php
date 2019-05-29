@extends('layouts.app')

@section('title','รายงาน')

@include('layouts.nevbar')


       
@section('content')

<div class="container text-center">
    <div>
      <h3 style="color:#2C3E50" >รายงานการทาบบัตร</h3> 

    </div>
      
    <div class="row justify-content-center">
    <div class="input-group col-md-4">
      <select class="form-control">
        <option value="choose" selected>โปรดเลือก</option>
        <option value="Morning">Morning Report</option>
        <option value="Medcon">Medical Conferance</option>
        <option value="Morning">Topic Review</option>
        <option value="Medcon">Interest Case</option>
      </select>
    </div> 
  </div>
 
<table class="table table-striped table-condensed">
      <thead>
          <tr>
              <th class="text-center" width="115px">ลำดับที่</th>
              <th class="text-center" width="115px">ชื่อ</th>
              <th class="text-center" width="115px">นามสกุล</th>
              <th class="text-center" width="115px">สถานะ</th>
          </tr>
      </thead>   
      <tbody>
          <tr>      
              <td class="text-center" width="150px">1</td>
              <td class="text-center" width="150px">ปนัดดา</td>
              <td class="text-center" width="150px">เที่งรอด</span></td>
              <td class="text-center" width="150px">แพทย์ประจำบ้าน ปี 3</span></td>
          </tr>
          <tr>      
              <td class="text-center" width="150px">2</td>
              <td class="text-center" width="150px">ศันสนีย์</td>
              <td class="text-center" width="150px">สุ่มก่ำ</span></td>
              <td class="text-center" width="150px">แพทย์ประจำบ้าน ปี 3</span></td>
          </tr>
          <tr>      
              <td class="text-center" width="150px">3</td>
              <td class="text-center" width="150px">นงนภัส</td>
              <td class="text-center" width="150px">สำแดงเดช</span></td>
              <td class="text-center" width="150px">แพทย์ประจำบ้าน ปี ๅ</span></td>
          </tr>
      </tbody>
  </table>
</div>

@endsection