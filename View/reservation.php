<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container_res">
        <section class="bien_container">
            <h2>choisir un bien</h2>
            <div class="bien_parent">
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            apartment
                        </h3>
                    </div>
                    <div class="img_bien">

                        <a href="#">
                            <img src="../src/images/apartment1.jpeg" alt="apartment" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Bungalow
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/bungalow.jpeg" alt="bungalow" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Chambre Simple vue intérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_simple_interieur.jpg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Chambre Simple vue extérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_simple_exterieur.jpg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Chambre lit double vue intérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_double_intérieure.jpeg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Chambre lit double vue extérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_double_exterieur.jpeg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">
                    <div class="title_bien">
                        <h3 class="title">
                            Chambre deux lit simple vue intérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_simple_deux_lit.jpg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
                <div class="bien_child">

                    <div class="title_bien">
                        <h3>
                            Chambre deux lit simple vue extérieure
                        </h3>
                    </div>
                    <div class="img_bien">
                        <a href="#">
                            <img src="../src/images/chambre_simple_deux_lit_extérieure.jpg" alt="" class="img">
                        </a>
                    </div>
                    <div class="prix_bien">
                        <input type="number">
                        <h3>
                            1000$
                        </h3>
                        <input type="checkbox" name="valid" id="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="enfant_container">
                <h3 class="title">
                    les enfants
                </h3>
                <label for="nombre">nombre des enfants</label>
                <input type="text" name="nombre" id="nombre" placeholder="entre le nombre des enfants">
            </div>
        </section>
    </div>
</body>

</html>