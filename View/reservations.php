<?php
require_once '../controller/ReservationController.php';
require_once '../controller/BienController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>

    <div class="container_res">
        <section class="bien_container">
            <h2>choisir un bien</h2>
            <nav class="menu--horiz">
                <ul>
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">Appartement</a></li>
                    <li><a href="#">Bungalow</a></li>
                    <li><a href="#">Chambre</a></li>
                </ul>
            </nav>
            <div class="bien_parent">
                <?php foreach ($biens as $bien) : ?>
                    <div class="bien_child">
                        <div class="title_bien">
                            <h3 class="title">
                                <?php echo $bien['nom']; ?>
                            </h3>
                        </div>
                        <div class="img_bien">

                            <a href="#">
                                <img src="../src/images/<?php echo $bien['image']; ?>" alt="<?php echo $bien['image']; ?>" class="img">
                            </a>
                        </div>
                        <div class="prix_bien">
                            <input type="number" id="number_<?php echo $bien['id_bien']; ?>" name="numberOfBien" value="1" min="1" max="10">
                            <input type="text" value="<?php echo $bien['id_bien']; ?>" name="idBein" hidden>
                            <h3 id="price_<?php echo $bien['id_bien']; ?>">
                                <?php echo $bien['prix'] . " $"; ?>
                            </h3>
                            <input type="checkbox" name="validCheck" id="validCheck" class="check_input">
                        </div>
                        <div class="dates">
                            <input placeholder="Date Entrer" name="dateEntrer" type="text" class="date" id="dateEntrer_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                            <input placeholder="Date Sortie" name="dateSortie" type="text" class="date" id="dateSortie_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <button id="btn_reservation" type="submit" onclick="verefirerValidation()">Valider la Reservation</button>
            <button id="btn_send" type="submit" onclick="sendData()">send Data</button>
        </section>
        <section class="enfant_container" hidden>
            <div>
                <h3 class="title">
                    les enfants
                </h3>
                <div class="number_input">
                    <label for="nombre">nombre des enfants</label>
                    <input type="number" name="nombre" id="nombre" placeholder="Choisissez le nombre d'enfants" min="1" max="10">
                </div>
                <div class="number_enfant">

                </div>

            </div>
        </section>

        </section>
        <section class="pension_container" hidden>
            <div>
                <h3 class="title">
                    les Pensions
                </h3>
                <div class="pension_select">
                    <select name="" id="">
                        <option value="complet">complet</option>
                        <option value="complet">sans</option>
                        <option value="complet">petit dej/dej</option>
                        <option value="complet">petit dej/diner</option>

                    </select>
                </div>
            </div>
        </section>
    </div>
</body>

</html>