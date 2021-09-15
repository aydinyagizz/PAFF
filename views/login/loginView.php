<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php BASE_URL ?>views/login/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/FelixLuciano/prim@1.3.0/dist/prim.min.css" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <title>PAFF-HOŞGELDİNİZ</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>HOŞGELDİNİZ</h1>

            <form class="form">


                    <input type="text" autocomplete="off" placeholder="Email" id="email" value="">

                    <input type="password" placeholder="Şifre" id="password" value="">

                    <input class="button" type="submit" id="login-button"  onclick="signIn()" value="Giriş Yap">
          


            </form>

           
   
   
  </div>
  
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
   
    <script src="login.js"></script>
</body>

</html>