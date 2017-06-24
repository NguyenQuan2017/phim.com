@extends('admin/master/master')
@section('content')
<div class="wrapper-content ">
   <div class="col-sm-8">
      <div class="row">
         <div class="ibox float-e-margins">
            <div class="widgets-container col-m-7">
            <div class="row">
            <form action="">
               <div class="profile-img-box col-sm-5"> <img src="{{url('admin/images/profile_big.jpg')}}" class="full-width" alt="image"> 
               </div>

               <a class="list-group-item active col-sm-7" href="">
               <span class="glyphicon glyphicon-dashboard"></span> Thông tin cá nhân
               </a>

               <a class="list-group-item col-sm-7"  href="photos">
                <span style="font-size: 20px">Name:</span><span>&nbsp <strong style="font-size: 20px"> Nguyen Van Quan</strong></span>
               </a>  
               
               <a class="list-group-item col-sm-7"  href="photos">
                <span style="font-size: 20px">Username:</span><span>&nbsp <strong style="font-size: 20px"> NguyenQuan</strong></span></a>
               <a class="list-group-item col-sm-7"  href="photos">
                <span style="font-size: 20px">Email:</span><span>&nbsp <strong style="font-size: 20px"> ngquancit@gmail.com</strong></span>
                 </a> 
               <a class="list-group-item col-sm-7"  href="photos">
                <span style="font-size: 20px">Level:</span><span>&nbsp <strong style="font-size: 20px"> Adminstrator</strong></span>
               </a>
                </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop