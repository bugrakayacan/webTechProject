<html>
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>buğra kayacan | G221210389</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="login.css" rel="stylesheet">


  </head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mb-1 h1" href="#">BUĞRA KAYACAN</a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">  
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">Hakkımda</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="ozgecmis.html">Özgeçmişim</a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Şehrim
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sehrim.html">TEKİRDAĞ</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Mirasımız</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>          
    </ul>

</div>
<div class="d-flex"><a href=login.html><button class="btn bg-dark text-white">Giriş</button></a></div>
</nav>



<div style="height:25%"></div>
<header><h1 style="font-size: 28px;; text-align:center; margin-top: 1%;">LOGIN</h1></header>

<div class="login">
    <div  class="container-fluid p-4 my-4 ">
       <?php
            if($_POST["kullaniciadi"]=="g221210389@sakarya.edu.tr" && $_POST["sifre"]=="g221210389")
            {
                $kullaniciadi = $_POST["kullaniciadi"];
                $kullaniciadi = $_POST["sifre"];
                echo "<font size='200px'>Hoşgeldiniz \"$kullaniciadi\".</font>";
            }
            else
            {
                echo "<font size='200px'>Kullanıcı adı ya da şifre hatalı. <br>Giriş sayfasına yönlendiriliyorsunuz...</font>";
                header("Refresh: 3; url=http://bugrakayacan.rf.gd/login.html");
            }

        ?>
    </div>
</div>

<div style="height:20%"></div>

   
      <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.google.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-google"></i>
            </a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.instagram.com/bugrakayacan"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-instagram"></i>
            </a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href=""
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.github.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="bi bi-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-dark">Buğra Kayacan</a>
        </div>
        <!-- Copyright -->
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

