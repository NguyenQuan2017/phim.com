@extends('admin/master/master')
@section('content')
<!--All form elements  start -->
<div class="col-lg-8  top20 bottom20">
   <div class="widgets-container">
      <h3><strong>ADD FILM </strong></h3>
      <hr>
      <form action="" method="POST" enctype="multipart/form-data" id="frmadd">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

         @include('admin/master/layout/errors/errors')
         <div class="form-group col-lg-12">
            <label >NAME FILM</label>
            <input class="form-control m-t-xxs" name="name" id="" value="" type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >TITLE</label>
            <input class="form-control" name="title" form-control m-t-xxs" id="" value="" type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >CONTENT</label> 
             <textarea class="textarea_editor form-control" name="content" rows="15" placeholder="Enter text ..."></textarea>
         </div>
    
         <div class="form-group col-lg-12">
            <label >IMAGES</label>
            <input name="image" class=" form-control m-t-xxs" id=""  type="file">
         </div>
         <div class="form-group ">
            <input type="submit"  class="btn aqua m-t-xs " id="" value="ADD">
         </div>
   </div>
   </form>
</div>
</div>
<!--All form elements  End -->
@stop