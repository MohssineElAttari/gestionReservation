<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../view/login.php');
}
?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="../index.html">Hotel Marrakech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../view/reserver.php">Reservation</a>
                    </li>
                </ul>
                <div class="row col-md-9 text-right d-flex justify-content-end">


                    <?php
                    if (!empty(@$_SESSION['id'])) {
                    ?>
                        <a href="<?php echo @$_SESSION["LogOut"]; ?>" class="btn btn-primary ">Logout</a>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-outline-primary me-2 ">Login</a>
                        <a href="register.php" class="btn btn-primary ">Sign-up</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</header>