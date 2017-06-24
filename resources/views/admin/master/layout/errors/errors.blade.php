@if (count($errors) > 0) 
@foreach ($errors->all() as $error) 
<div class="alert alert-micro alert-border-left alert-danger alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   <i class="fa fa-check pr10"></i>
   {{ $error }}
</div>
@endforeach 
@endif