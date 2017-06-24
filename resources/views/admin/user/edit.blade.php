@extends('admin/master/master')
@section('content')
<!--All form elements  start -->
<div class="col-lg-8  top20 bottom20">
   <div class="widgets-container">
      <h3><strong>EDIT USER </strong></h3>
      <hr>
      <form action="{{url('admin/user/edit')}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="user_id" value="{{$users['id']}}">
         <div class="form-group col-lg-12">
            <label >USERNAME</label>
            <input class="form-control m-t-xxs" id="" value="{{$users['username']}}"  type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >EMAIL</label>
            <input name="text" class=" form-control m-t-xxs" id="" value="{{$users['email']}}"  type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >AVARTAR</label>
            <input name="text" class=" form-control m-t-xxs" id=""  type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >NAME</label>
            <input name="text" class=" form-control m-t-xxs" id="" value="{{$users['name']}}"  type="text">
         </div>
          <div class="form-group col-lg-12">
            <label >LEVEL</label>
            <input name="text" class=" form-control m-t-xxs" id="" value="{{$users['level']}}" type="text">
         </div>
              
         <div class="form-group ">
            <input name="submit" class="btn aqua m-t-xs " type="submit" id="" value="UPDATE">
         </div>
   </div>
   </form>
</div>
</div>
<!--All form elements  End -->
@stop