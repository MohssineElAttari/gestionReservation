<?php
include_once '../controller/RoleController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-tekchbila">
    <div class="container">
        <!-- Default form subscription -->
        <h1 class="text-center">ajouter Un Role</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">

                <div class="col-6">
                    <div class="form-group">
                        <label for="titre">liblle</label>
                        <input type="text" name="liblle" class="form-control" id="liblle" placeholder="Enter le liblle">
                    </div>
                </div>
            </div>
            <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary">
        </form>
        <!--  -->
        <h1 class="text-center">list des Roles</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">libelle</th>
                    <th scope="col">opération</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($roles as $role) : ?>
                    <tr>
                        <th scope="row"><?php echo $role['id']; ?></th>
                        <td><?php echo $role['titre']; ?></td>
                        <td>
                            <span>
                                <a href="#" data-target="#<?php echo $role['id']; ?>"><i class='fas fa-edit' style='font-size:30px;'></i></a>
                            </span>
                            <span>
                                <a href="#" name="delete" class="text-danger" onclick="deleteRole('<?php echo $role['id']; ?>')"><i class='fas fa-trash-alt' style='font-size:30px;'></i></a>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!--  -->
    </div>

    <!-- Default form subscription -->
</body>
<script lang="javascript" defer>
    function deleteRole(delid) {
        if (confirm("Voulez vous supprimer ce role?")) {
            window.location.href = '/gestionReservation/view/roles.php?delete=' + delid;
        }

    }
</script>

</html>