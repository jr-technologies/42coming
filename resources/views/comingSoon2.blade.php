<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from azmind.com/premium/marco/v2-1/layout-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 08:34:14 GMT -->
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Property42</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/typicons/typicons.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/css/form-elements.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/media-queries.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('/')}}/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('/')}}/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('/')}}/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{{url('/')}}/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
				
        <!-- Top content -->
        <div class="top-content">
        	
        	<!-- Top menu -->
		
				<div class="container">
					<div class="navbar-header">
					
						<a class="navbar-brand lgo" href="{{route('home')}}"></a>
					</div>
				
				</div>
			
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig">Property42.pk is Coming in <strong>3 Month</strong></h1>
                            <div class="description wow fadeInLeftBig">
                            	<p style="font-size: 20px;">
	                            	Largest Property <b>Selling</b>, <b>Buying</b> and <b>Renting</b> site in Lahore!
                            	</p>
                            </div>
                            <div class="top-big-link wow fadeInUp">
                            	<a class="btn btn-link-1 scroll-link" href="#pricing"><i class="fa fa-twitter"></i> twitter 
</a>
                            	<a class="btn btn-link-2 scroll-link" href="#features"><i class="fa fa-facebook"></i> facebook 
</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box wow fadeInUp" id="form-area">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign up now</h3>
                                    @if(\Session::has('errors'))
                                        @foreach(\Session::get('errors') as $error)
                                            <p style="color:red; font-size: 14px;">{{$error}}</p>
                                        @endforeach
                                    @endif
                                    @if(\Session::has('success'))
                                        <p style="color:green;">{{\Session::get('success')}}</p>
                                    @else
                            		    <p>Fill in the form below to get Free Registration:</p>
                                    @endif
                        		</div>
                        		<div class="form-top-right">
                        			<span aria-hidden="true" class="typcn typcn-pencil"></span>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="{{route('register')}}" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="fName" placeholder="First name..." class="form-first-name form-control" id="form-first-name" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="lName" placeholder="Last name..." class="form-last-name form-control"  required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
			                        </div>
									 <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="pas  form-control"  required>
			                        </div>
			                        <button type="submit" name="register" class="btn">Sign me up!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       

        <!-- Javascript -->
        <script src="{{url('/')}}/assets/js/jquery-1.11.1.min.js"></script>
        <script src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.backstretch.min.js"></script>
        <script src="{{url('/')}}/assets/js/wow.min.js"></script>
        <script src="{{url('/')}}/assets/js/retina-1.1.0.min.js"></script>
        <script src="{{url('/')}}/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="{{url('/')}}/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>


<!-- Mirrored from azmind.com/premium/marco/v2-1/layout-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 08:34:59 GMT -->
</html>