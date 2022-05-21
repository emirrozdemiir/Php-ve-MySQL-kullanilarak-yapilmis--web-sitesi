<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Sonuçlar </title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
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
                <li class="dropdown">
                    <a  class="dropdown-toggle" ">
                        Ters Dizim Sözlüğü
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="mailto:umit.bag@ogr.iu.edu.tr">
                        <i class="fa fa-envelope-o"></i>
                        Email
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main" style="background-image: url('images/deneme4.png')">

    <h1 class="logo cursive">
        Kelimeler
    </h1>

    <div id="sonuclar-cont" class="container info-text"  >
     <?php
     $arananKelime= trim($_POST['arananKelime']);
     @ $db=new MySQLi("localhost","root","","tersdizim");
     $db->set_charset("utf8");

     if (mysqli_connect_error())
     {
         echo "Hata! Veri tabanmına bağlanılamadı.";
         exit;
     }
     $sorgu="select * from kelimeler where kelimeadi like '%$arananKelime' ";
     $sonuc=$db->query($sorgu);
     $sonucSayisi=$sonuc->num_rows;

     if (empty($sonucSayisi))
     {
         echo "Aradığınız koşulla eşleşen kelime bulunamadı!!!";

     }
     else
     { for ($i=0;$i<$sonucSayisi; $i++)
     {
         $bulunan= $sonuc->fetch_assoc();
         echo "<p> ".($i+1).". Kelime Adı:\t";
         echo $bulunan['kelimeadi'];
         echo"<hr style='width:40%'>";
     }
         $db->close();
     }
    ?>
        <form action="anasayfa.php" method="post" class="form-inline" >
            <input style="float: right" type="submit" name="gonder" class="btn btn-danger btn-fill" value="Ana Sayfa">
        </form>
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
