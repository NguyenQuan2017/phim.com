@extends('admin/master/master')
@section('content')
<!--All form elements  start -->
<div class="col-lg-8  top20 bottom20">
   <div class="widgets-container">
      <h3><strong>EDIT FILM </strong></h3>
      <hr>
      <form action="{{url('admin/film/edit')}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="film_id" value="{{$films['id']}}">
         <div class="form-group col-lg-12">
            <label >NAME FILM</label>
            <input class="form-control m-t-xxs" id="" name="name" value="{{$films['name_films']}}" type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >TITLE</label>
            <input name="title" class=" form-control m-t-xxs" id="" value="{{$films['title']}}" type="text">
         </div>
         <div class="form-group col-lg-12">
            <label >CONTENT</label> 
            <textarea class="textarea_editor form-control" name="content" rows="15" placeholder="Enter text ...">{{$films['content']}}</textarea>
         </div>
         <div class="form-group col-lg-12">
            <label >IMAGES DISPLAY</label>
            <img style="width: 200px;height: 300px" class="form-control" src="{{url('public/upload/images/'.$films['images'])}}" alt="image film">
         </div>
         <div class="form-group col-lg-12">
            <label >IMAGES</label>
            <input name="image" class=" form-control m-t-xxs" id=""  type="file">
         </div>
         <div class="form-group ">
            <input type="submit" class="btn aqua m-t-xs " id="" value="UPDATE">
         </div>
   </div>
   </form>
</div>
</div>
<!--All form elements  End -->
@stop