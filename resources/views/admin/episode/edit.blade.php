@extends('admin/master/master')
@section('content')
<!--All form elements  start -->
<div class="col-lg-8  top20 bottom20">
   <div class="widgets-container">
      <h3><strong>UPDATE EPISODE </strong></h3>
      <hr>
      <form action="{{url('admin/episode/edit')}}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
      <input type="hidden" name="episode_id" value="{{$episode['id']}}">
         <!-- <div class="form-group col-lg-12">
            <label class="col-sm-2 control-label">NAME SESSION</label>
             
                  <select class="form-control bottom15" name="account">
                    <option>Session 1</option>
                    <option>Session 2</option>
                    <option>Session 3</option>
                    <option>Session 4</option>
                  </select>
         </div> -->
         <div class="form-group col-lg-12">
            <label >EPISODE</label>
            <input name="episode" class=" form-control m-t-xxs" id="" value="{{$episode['episode']}}" type="text">
         </div>
        <div class="form-group col-lg-12">
            <label >LINK VIDEO</label>
            <input name="link_video" class=" form-control m-t-xxs" id="" value="{{$episode['link_video']}}" type="text">
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