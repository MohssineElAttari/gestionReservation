<?php
require_once 'includes/autoload.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- SASS -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/styleHome.css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />

    <title>Home</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light px-3 px-md-5 py-4" style="background-color: black;">
            <a class="navbar-brand text-white" href="index.php">Hotel Marrakech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-center align-items-center py-5 py-lg-0">
                    <li class="nav-item py-2 py-lg-0 px-lg-3">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item py-2 py-lg-0 px-lg-3">
                        <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
                    </li>
                    <li class="nav-item py-2 py-lg-0 px-lg-3">
                        <a class="btn-normal" role="button" href="view/login.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="home-header d-flex justify-content-center align-items-center col-12">
            <div class="hero col-sm-10 col-md-8 col-lg-6">
                <div class="row">
                    <h1 class="font-weight-bold text-white px-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                </div>
                <div class="row">
                    <p class="lead text-white px-0">A aspernatur dolorem provident ipsam aliquid obcaecati doloremque odio
                        exercitationem aliquam numquam, ipsum nulla impedit culpa enim illum, veritatis mollitia eum
                        odit.</p>
                </div>
                <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
            </div>
        </div>
    </header>

    <div class="container">
        <section class="home-sec">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-12 col-lg-6 d-xl-flex flex-column justify-content-xl-center align-items-xl-start pl-4">
                    <div>
                        <h1>About Us</h1>
                    </div>
                    <p class="descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatem quisquam officia suscipit, sapiente, qui est obcaecati quae consequatur, animi odio. Pariatur optio soluta explicabo debitis. Officiis a alias dolorum. Totam voluptas ad asperiores, aspernatur repellat ab rem doloremque autem velit minus eum, fugit sequi distinctio accusamus natus corrupti. Exercitationem, soluta natus. Ullam aliquid nihil libero iusto voluptas harum vel commodi inventore cupiditate id! Officia modi ullam ipsa obcaecati voluptatem adipisci id maiores perferendis.</p>
                    <a class="btn-normal" role="button" href="#">Read More</a>
                </div>
                <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center mt-5 mt-lg-0"><img class="img-fluid d-xl-flex" src="src/images/about-as.jpg" width="100%"></div>
            </div>
        </section>

        <section class="home-sec">
            <div class="">
                <div>
                    <h1 class="text-center font-weight-bold">Our Rooms</h1>
                </div>
                <p class="text-center descrip">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quis Rerum quisquam ullam sed laudantium, quibusdam quis voluptates aliquam quas officia aperiam eius, mollitia soluta corporis sapiente labore ipsa natus. In sapiente veniam, aperiam cum accusamus maxime dolore rerum.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 my-3"><img class="img-fluid" src="src/images/apartment2.jpeg">
                    <h4 class="my-3">Apartment</h4>
                    <h5>$300/Night</h5>
                    <hr>
                    <p class="dsecrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempora minima ipsum, odit perferendis itaque.</p>
                    <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
                </div>
                <div class="col-md-6 col-lg-3 my-3"><img class="img-fluid" src="src/images/bungalow.jpeg">
                    <h4 class="my-3">Bungalow</h4>
                    <h5>$500/Night</h5>
                    <hr>
                    <p class="dsecrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempora minima ipsum, odit perferendis itaque.</p>
                    <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
                </div>
                <div class="col-md-6 col-lg-3 my-3"><img class="img-fluid" src="src/images/chambre_simple.jpeg">
                    <h4 class="my-3">Single Room</h4>
                    <h5>$100/Night</h5>
                    <hr>
                    <p class="dsecrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempora minima ipsum, odit perferendis itaque.</p>
                    <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
                </div>
                <div class="col-md-6 col-lg-3 my-3"><img class="img-fluid" src="src/images/chambre_double.jpeg">
                    <h4 class="my-3">Double Room</h4>
                    <h5>$200/Night</h5>
                    <hr>
                    <p class="dsecrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempora minima ipsum, odit perferendis itaque.</p>
                    <a class="btn-normal" role="button" href="view/reserver.php">Book Now</a>
                </div>
            </div>
        </section>

    </div>


    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: black;">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">By Mohssine Elattari © 2021 Copyright:
            <a class="text-white" href="#">Marrakechhotel.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>