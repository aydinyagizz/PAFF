<!DOCTYPE html>
<html>

<head>
    <base href="<?php BASE_URL ?>views/videoCard/">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="../videoCard/cardsstyles.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>OYUNCU KARTLARI</title>
    <link rel="stylesheet" href="material-cards.css">

</head>

<body>
    <div >
        <div >
            <p style="font-size:20px;"><strong>Tercih Edilen Ayak</strong></p>
            <form class="left">

                <label style="font-size:12px;">
                    <input type="checkbox" name="fl-colour" value="Sağ" /> Sağ</label>
                <br>
                <label style="font-size:12px;">
                    <input type="checkbox" name="fl-colour" value="Sol" /> Sol</label>
                <br>

            </form>
            <p style="font-size:20px;"><strong>Tercih Edilen Mevki</strong></p>
            <form class="right">
                <label style="font-size:12px;">
                    <input type="checkbox" value="Kaleci" /> Kaleci</label>
                <br>
                <label style="font-size:12px;">
                    <input type="checkbox" value="Defans" /> Defans</label>
                <br>
                <label style="font-size:12px;">
                    <input type="checkbox" value="Ortasaha" /> Ortasaha</label>
                <br>
                <label style="font-size:12px;">
                    <input type="checkbox" value="Forvet" /> Forvet</label>
                <br>
            </form>

        </div>

        <section class="container">

            <div class="page-header">
                <h1 style="color:white">Firebase<br></h1>
            </div>



            <div id="mainContainer" class="row active-with-click" style="
    height: 829px;
">
                <!-- Filtre deneme baslangıc -->
                <!-- Filtre deneme baslangıc -->


                <!-- Filtre deneme bitiş -->

                <!-- TEMP CARD -->
                <div id="template" class="col-md-3 col-sm-6 col-xs-12 2  temp">
                    <article class="material-card Deep-Orange ">
                        <h2><b></b>
                            <span>Oyuncu İsmi</span>
                            <strong>
                                <i class="fa fa-futbol-o"></i>
                                <p></p>
                            </strong>

                            <strong>
                                <i class="fa fa-futbol-o"></i>
                                <p></p>
                            </strong>

                        </h2>

                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive">
                            </div>
                            <div class="mc-description">
                                Oyuncu Bio
                            </div>

                        </div>

                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>

                        <div class="mc-footer">

                            <a href=""> <button id="button2">DETAYA GİT</button></a>


                        </div>

                    </article>
                    <br /><br />
                </div>
                <!-- /TEMP CARD -->

            </div>
        </section>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        $(document.body).on("click", 'body, .material-card > .mc-btn-action', function() {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    </script>


    <script>
        const gradient = document.querySelector(".gradient");

        function onMouseMove(event) {
            //  gradient.style.backgroundImage = 'radial-gradient(at ' + event.clientX + 'px ' + event.clientY + 'px, rgba(233, 233, 245,0.3) 0, #0c0c0d 50%)';

        }
        document.addEventListener("mousemove", onMouseMove);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.0.0/firebase-compat.js"></script>
    <script src="../public/anahtar.js"></script>
    <script src="videoCard.js"></script>


</body>

</html>