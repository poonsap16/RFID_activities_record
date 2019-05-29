@extends('layouts.app')

@section('title','รายงาน')

@include('layouts.nevbar')

@section('head','รายงาน')

       
@section('content')
<!-- div1 -->
<div id="fullscreen_bg" class="fullscreen_bg"/>
  
<!-- form -->
<form class="form-signin">

<!-- div 2 -->
<div class="container">
  
<div class="row">

          <!-- div 3 -->
          <div class="text-center">
                <h3 style="color:#2C3E50" >Financial Reports</h3>
                <h4> <label for="Choose Report"  style="color:#E74C3C">Choose Report</label></h4>
                <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
                    <select class="form-control"  >
                                    <option value="Income" selected>Income</option>
                                    <option value="Expenses">Expenses</option>
                                    <option value="Profit">Profit</option>
                    </select>
                </div>                         
                <h5><label for="Choose Report" style="color:#E74C3C"> Time :</label>
                             <input id="a" type="radio" name="type" value="Daily">Daily 
                             <input id="b" type="radio" name="type" value="Weekly">Weekly
                             <input id="c" type="radio" name="type" value="Monthly">Monthly
                </h5>
                                
                                <div class="customer" >
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                        <input type="date" class="form-control" placeholder="Date" />
                                    </div>
                                </div>
                </br><button type="button" class="btn btn-primary btn-lg btn3d"><span class="glyphicon glyphicon-search"></span> View</button> 
          </div>
          <!-- end div 3 -->


  

  <table class="table table-striped table-condensed">
      <thead>
          <tr>
              <th class="text-center" width="115px">Num</th>
              <th class="text-center" width="115px">Name</th>
              <th class="text-center" width="115px">Money</th>
              <th class="text-center" width="115px">Date</th>
              <th class="text-center" width="115px">Details</th>
          </tr>
      </thead>   
      <tbody>
          <tr>      
              <td class="text-center" width="150px">1</td>
              <td class="text-center" width="150px">Mai Ahmed</td>
              <td class="text-center" width="150px">500</span></td>
              <td class="text-center" width="150px">3/12/2016</span></td>
              <td class="text-center" width="150px">Prescription</span></td>
          </tr>
      </tbody>
  </table>

    <div class="text-center">
            <h4> <label style="color:#E74C3C" for="Total">Total :</label>7740</h4>
    </div>
</div>
</div>
<!-- end env2 -->
    
</form>
<!-- end form1 -->

</div>
<!-- end div 1 -->



@endsection