<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Ana Sayfa </title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="mailto:umit.bag@ogr.iu.edu.tr">
                      <i class="fa fa-envelope-o"></i>
                      Email
                  </a>
              </li>
          </ul>

      </div><!-- /.navbar-collapse -->

    <!-- Collect the nav links, forms, and other content for toggling -->

  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('images/deneme4.png')">
<!--    Change the image source '/images/default.jpg' with your favourite image.     -->





    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Ters Dizim Sözlüğü

        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->



        <div class="content">
            <h4 class="motto">Türkiye'nin ilk ters dizim sözlüğü.</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Join the waiting list for the beta. We keep you posted.
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form action="sonuclar.php" method="post" class="form-inline" >
                          <div class="form-group">
                            <input name="arananKelime" type="text" class="form-control transparent" required placeholder="Aranacak kelime...">
                          </div>
                            <input type="submit" name="gonder" class="btn btn-danger btn-fill"  value= "Göster">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="footer">
      <div class="container">

      </div>
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>