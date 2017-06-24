@extends('admin/master/master')
@section('content')
<!--All form elements  start -->
<div class="col-lg-8  top20 bottom20">
   <div class="widgets-container">
      <h3><strong>ADD SESSION </strong></h3>
      <hr>
      <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      @include('admin/master/layout/errors/errors')
   <!--       <div class="form-group col-lg-12">
            <label class="col-sm-2 control-label">NAME FILM</label>
             
                  <select class="form-control bottom15" name="account">
                    <option>Name Film 1</option>
                    <option>Name Film 2</option>
                    <option>Name Film 3</option>
                    <option>Name Film 4</option>
                  </select>
         </div> -->
         <div class="form-group col-lg-12">
            <label class=" col-sm-2 control-label" >SESSION</label>
            <input name="seasion" class=" form-control m-t-xxs" id="" value="" type="text">
         </div>
    <!--      <div class="form-group col-lg-12">
            <label class="col-sm-2 control-label">EPISODE</label>
                  <select id="episode" class="form-control bottom15" multiple="multiple">
                    <option>Name Film 1</option>
                    <option>Name Film 2</option>
                    <option>Name Film 3</option>
                    <option>Name Film 4</option>
                  </select>
         </div> -->
         <div class="form-group ">
            <input type="submit" class="btn  aqua m-t-xxs " id="" value="ADD">
         </div>
   </div>
   </form>
</div>
</div>
<!--All form elements  End -->
@stop