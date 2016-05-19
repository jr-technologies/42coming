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
    <link href='https://fonts.googleapis.com/css?family=Handlee|Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('/')}}/assets/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
<div id="wrapper">
    <!-- Loader -->
    <div class="loader">
        <div class="loader-img"></div>
    </div>
    <div class="slideshow">
        <div class="slideset">
            <div class="slide"><img src="{{url('/')}}/assets/img/bg0.jpg" alt="image description"></div>
            <div class="slide"><img src="{{url('/')}}/assets/img/bg9.jpg" alt="image description"></div>
            <div class="slide"><img src="{{url('/')}}/assets/img/bg5.jpg" alt="image description"></div>
        </div>
        <a class="btn-prev" href="#">Previous</a>
        <a class="btn-next" href="#">Next</a>
    </div>
    <!-- Top content -->
    <div class="top-content">
        <!-- Top menu -->
        <header id="header">
            <a class="nav-opener" style="cursor: pointer;"><span></span></a>
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Property42.pk</a>
                </div>
            </div>
            <nav id="nav">
                <ul class="accordion">
                    <li>
                        <a href="#" class="opener">About Us</a>
                        <article class="slide">
                            <p>PROPERTY42.PK is friendly portal website. We are providing a maximum feature with minimum exercise, here you can find your desired property on single click. PROPERTY42.PK is providing flexible search for user which will provide potential clients with a better overall online experience. With modern housing and societies services and a growing population, property42.pk is a unique regional center and offers plenty of lifestyle and investment opportunity.  “Our reputation is the backbone of our success. We look forward to doing business with you!”</p>
                        </article>
                    </li>
                    <li class="active"><a href="#form-box">Register Now !</a></li>
                </ul>
            </nav>
        </header>
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text">
                        <div class="timer-hold">
                            <h1 class="wow fadeInLeftBig">Property42 is Coming in</h1>
                            <div id="simple_timer" class="timer">
                                <div class="timer-head-block"></div>
                                <div class="timer-body-block">
                                    <div class="table-cell day">
                                        <span class="tab-val">1</span>
                                        <span class="tab-metr">day</span>
                                    </div>
                                    <div class="table-cell hour">
                                        <span class="tab-val">1</span>
                                        <span class="tab-metr">hour</span>
                                    </div>
                                    <div class="table-cell minute">
                                        <span class="tab-val">1</span>
                                        <span class="tab-metr">minute</span>
                                    </div>
                                    <div class="table-cell second">
                                        <span class="tab-val">1</span>
                                        <span class="tab-metr">second</span>
                                    </div>
                                </div>
                                <div class="timer-foot-block"></div>
                            </div>
                        </div>
                        <div class="description wow fadeInLeftBig">
                            <p style="font-size: 22px">
                                Largest <b>Property Buying</b>, <b>Selling</b> and <b>Renting</b> platform in Lahore.
                            </p>
                        </div>
                        <ul class="social-links wow fadeInUp">
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/property42pk-1562646287317094/" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5 form-box @if(\Session::has('success')) successfull @endif" id="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                @if(\Session::has('errors'))
                                    <?php $errors = \Session::get('errors');?>
                                @endif
                                <p>Fill in the form below to get Free Registration:</p>
                            </div>
                            <div class="form-top-right">
                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="register" method="post">
                                <div class="input-holder @if(isset($errors) && $errors->has('fName')) error @endif">
                                    <span class="error-state">{{$errors->first('fName')}}</span>
                                    <input type="text" name="fName" placeholder="First name..." class="form-first-name form-control" id="form-first-name" required>
                                </div>
                                <div class="input-holder @if(isset($errors) && $errors->has('lName')) error @endif">
                                    <span class="error-state">{{$errors->first('lName')}}</span>
                                    <input type="text" name="lName" placeholder="Last name..." class="form-last-name form-control" required>
                                </div>
                                <div class="input-holder @if(isset($errors) && $errors->has('email')) error @endif">
                                    <span class="error-state">{{$errors->first('email')}}</span>
                                    <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
                                </div>
                                <div class="input-holder @if(isset($errors) && $errors->has('password')) error @endif">
                                    <span class="error-state">{{$errors->first('password')}}</span>
                                    <input type="password" name="password" placeholder="Password..." class="form-control" required>
                                </div>
                                <button type="submit" class="btn">Sign me up!</button>
                            </form>
                        </div>

                        <div class="register-successfully">
                            <h2>Thank You !!</h2>
                            <p>@if(\Session::has('success')) {{\Session::get('success')}} @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="{{url('/')}}/assets/js/all.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#simple_timer').syotimer({
            year: 2016,
            month: 7,
            day: 18,
            hour: 30,
            minute: 50
        });
    });
</script>
</body>

<!-- Mirrored from azmind.com/premium/marco/v2-1/layout-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 08:34:59 GMT -->
</html>