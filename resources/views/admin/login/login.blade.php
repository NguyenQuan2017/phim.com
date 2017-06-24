<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2017 04:46:08 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHIM</title>
    <!-- Bootstrap -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- slimscroll -->
    <link href="{{asset('admin/css/jquery.slimscroll.css')}}" rel="stylesheet">
<!--     <!-- project -->
    <!-- <link href="{{asset('admin/css/project.css')}}" rel="stylesheet"> -->
    <!-- flotCart css -->
    <!-- <link href="{{asset('admin/css/flotCart.css')}}" rel="stylesheet"> -->
    <!-- jvectormap -->
    <!-- <link href="{{asset('admin/css/jqvmap.css')}}" rel="stylesheet"> -->

    <!-- dataTables -->
    <link href="{{asset('admin/css/buttons.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/fixedHeader.dataTables.min.css')}}" rel="stylesheet">

    <!-- Fontes -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/ameffectsanimation.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/buttons.css')}}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
    <!-- top nev css -->
    <link href="{{asset('admin/css/page-header.css')}}" rel="stylesheet">
    <!-- adminui main css -->
    <link href="{{asset('admin/css/main.css')}}" rel="stylesheet">
   
    <!-- morris -->
    <link href="{{asset('admin/css/morris.css')}}" rel="stylesheet">

    <!-- aqua black theme css -->
    <link href="{{asset('admin/css/aqua-black.css')}}" rel="stylesheet">
    <!-- media css for responsive  -->
    <link href="{{asset('admin/css/main.media.css')}}" rel="stylesheet">

        <!-- AdminUI demo css-->
    <link href="{{asset('admin/css/adminUIdemo.css')}}" rel="stylesheet">

    <!-- Jquery confirm -->
    <link href="{{asset('admin/css/jquery-confirm.min.css')}}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{asset('admin/css/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-wysihtml5.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-multiselect.css')}}" rel="stylesheet">
</head>

<body class="aqua-bg login">
	<div class="middle-box text-center loginscreen ">
		<div class="widgets-container">
			<div>
				<h1 class="logo-name">ADMIN</h1>
			</div>
			
			<form action="{{url('/login')}}" method="post" class="top15">
			 {{ csrf_field() }}
				<div class="form-group">
					</span><input type="text" name="username" required=""  class="form-control"> 
				</div>
				<div class="form-group">
					<input type="password" name="password"  class="form-control">
				</div>
				<button class="btn aqua block full-width bottom15" type="submit">Login</button>
				<a href="forgot_password.html"><small>Forgot password?</small></a>
			
			</form>
			<p class="top15"> <small>Admin-UI is easy to use and customize &copy; 2016-2017</small> </p>
		</div>
	</div>
</body>


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2017 04:46:08 GMT -->
</html>