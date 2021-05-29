<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../view/login.php");
}
require_once '../controller/ReservationController.php';
require_once '../controller/BienController.php';
require_once '../controller/TypeController.php';
require_once '../controller/PensionController.php';
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/reserver.css">
<link rel="stylesheet" href="../css/style.css">
<title>Reservations</title>
<script src="../js/script.js" defer></script>
<script src="../js/reserver.js" defer></script>

<body>
  <div class="myContainer">
    <?php

    ?>
    <form method="POST" action="../controller/AuthentificationController.php">
      <div class="input-group">
        <button name="logout" type="submit" class="btn btn-secondary">logOut</button>
      </div>
    </form>
    <div class="myReservation">
      <!-- One "tab" for each step in the form: -->
      <div class="myForm">
        <h1>Reservation : </h1>
        <nav class="menu-horizontal">
          <ul>
            <li data-type="all" class="active"><a href="#">All</a></li>
            <?php foreach ($typeBiens as $typeBien) : ?>
              <li data-type="<?php echo $typeBien['id']; ?>"><a href="#"><?php echo $typeBien['type']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <div class="bien_parent">
          <?php foreach ($biens as $bien) : ?>
            <div class="bien_child show" data-bien="<?php echo $bien['id_type']; ?>">
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
              <?php
              if ($bien['nom'] == "Appartement" || $bien['nom'] == "Bungalow") { ?>
                <div class="dates">
                  <input placeholder="Date Entrer" name="dateEntrer" type="text" class="date" id="dateEntrer_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                  <input placeholder="Date Sortie" name="dateSortie" type="text" class="date" id="dateSortie_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                </div>

              <?php } ?>
              <div class="prix_bien">
                <input type="number" id="number_<?php echo $bien['id_bien']; ?>" name="numberOfBien" value="1" min="1" max="10">
                <input type="text" value="<?php echo $bien['id_bien']; ?>" name="idBein" hidden>
                <h3 id="price_<?php echo $bien['id_bien']; ?>">
                  <?php echo $bien['prix'] . " $"; ?>
                </h3>
                <input type="checkbox" name="validCheck" id="validCheck" class="check_input">
              </div>


            </div>

            <div class="modelBien" id="modal_<?php echo $bien['id_bien']; ?>" style="z-index: 99;">
              <div class="modelBien-content">
                <span class="close-button close_<?php echo $bien['id_bien']; ?>">&times;</span>
                <div class="tab_<?php echo $bien['id_bien']; ?>">
                  <div class="dates">
                    <h2>Entrer la date </h2>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 m b-3">
                        <label for="">date Entrer</label>
                        <input placeholder="Date Entrer" name="dateEntrer" type="text" class="date" id="dateEntrer_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="">date Sortie</label>
                        <input placeholder="Date Sortie" name="dateSortie" type="text" class="date" id="dateSortie_<?php echo $bien['id_bien']; ?>" onfocus="(this.type='date')">
                      </div>
                    </div>

                  </div>
                  <h1>Les enfants :</h1>
                  <section class="enfant_container">
                    <div>
                      <div class="number_input">
                        <label for="nombre">nombre des enfants</label>
                        <input type="number" name="nombre" id="nombre" class="nombre_<?php echo $bien['id_bien']; ?>" placeholder="Choisissez le nombre d'enfants" min="1" max="10">
                      </div>
                      <div class="number_enfant_<?php echo $bien['id_bien']; ?>" data-bien="<?php echo $bien['id_bien']; ?>">
                      </div>
                    </div>
                  </section>
                </div>
                <div class="tab tab_<?php echo $bien['id_bien']; ?>">
                  <h1>Les Pension :</h1>
                  <section class="pension_container">
                    <div>
                      <div class="pension_select">
                        <select name="" id="pension_<?php echo $bien['id_bien']; ?>">
                          <?php foreach ($pensions as $pension) : ?>
                            <option value="<?php echo $pension['id_pension']; ?>">
                              <?php echo $pension['nom']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </section>

                </div>

                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="button" class="prevBtn_<?php echo $bien['id_bien']; ?>" id="prevBtn" style="display: none;">Previous</button>
                    <button type="button" class="nextBtn_<?php echo $bien['id_bien']; ?>" id="nextBtn" data-action="next">Next</button>
                  </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
      <div class="cardRes">
        <!-------------------- Start of Side Card ------------------------>
        <div class="row">
          <div class="col-md-12 col-lg-12 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div>

          <!------------------------- End Of Side Card ----------------------->

        </div>
        <input type="button" value="Reserver" id="btn_reserver" class="btn btn-success">
      </div>

    </div>





  </div>
</body>

</html>