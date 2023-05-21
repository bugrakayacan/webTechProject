<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div  class="container-fluid p-4 my-4 ">
       <?php
            $ad = $_POST["name"];
            echo "<font size='200px'>Ad Soyad: \"$ad\". <br></font>";
            $email = $_POST["email"];
            echo "<font size='200px'>Mail: \"$email\". <br></font>";
            $egitim=$_POST['egitim'];
            echo "<font size='200px'>Eğitim Durumu: \"$egitim\". <br></font>";
            $cinsiyet=$_POST['gender'];
            echo "<font size='200px'>Cinsiyeti: \"$cinsiyet\". <br></font>";
            if((isset($_POST["onaykutusu"])))
            {
                echo "<font size='200px'>İletişim Onayı: (+). <br></font>";      
            }
            else
            {
                echo "<font size='200px'>İletişim Onayı: (-). <br></font>";    
            }
            $konu=$_POST['Konu'];
            echo "<font size='200px'>Konu: \"$konu\". <br></font>";
            $mesaj=$_POST['mesaj'];
            echo "<font size='200px'>Mesaj: \"$mesaj\". <br></font>";


        ?>
    </div>
</body>
</html>