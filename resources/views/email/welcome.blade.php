<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property42.pk</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css" >
     <link rel="stylesheet" href="{{url('/')}}/assets/css/icon.css" >
    <link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>

</head>
<body>
    <div id="wrapper">
        <div class="header">
                <div class="container">
                  <div class="brand">Property42.pk</div>
                </div>
          </div>
          <main id="main">
              <div class="content">
                   <div class="container">
              
                  
                  <div class="detail-p">
                  <p>Dear <b>{{ $user->fName.''.$user->lName }}</b></p>
                  <p>Your account is created successfully, we are currently working on it.</p>
                  <p>Please keep visiting our website, we will update you soon..</p>
                  
                  <h1>Thank You!</h1>    
                    </div>  
                    </div>
               </div>
               
               <div class="footer">
                    <div class="container">
                   <div class="follow">follow us:   </div>
                     <ul class="social">
                        <li><a href="#"><span class="facebook icon-facebook-letter-logo"></span></a></li>
                       <li><a href="#"><span class="twitter icon-twitter-logo"></span></a></li>
                       <li><a href="#"><span class="google icon-google-plus-symbol"></span></a></li>
                       </ul>
                   </div>
                   
               </div>
          </main>
     </div>
  </body>
</html>