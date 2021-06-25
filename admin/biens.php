<?php
require_once '../model/BienModel.php';
$action = $_GET['action'];
$bienModel = new BienModel();

switch ($action) {
    case 'add':
        echo 'add';
        break;
    case 'update':
        echo 'update';
        break;
    case 'delete':
        break;
    default:
        $biens = $bienModel->findAll();
        break;
}
?>

<?php include_once "partials/sidebar.php" ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php include_once "partials/header.php" ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Biens</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="text-align: right">
                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                        <span class="text">Ajouter Reservation</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>_</th>
                                <th>Nom</th>
                                <th>vue</th>
                                <th>Type</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($biens as $bien) : ?>
                                <tr>
                                    <td>
                                        <img src="../src/images/<?php echo $bien['image']; ?>"
                                             alt=""
                                             width="100"
                                             height="100"
                                        >
                                    </td>
                                    <td><?php echo $bien['nom']; ?></td>
                                    <td><?php echo $bien['vue']; ?></td>
                                    <td><?php echo $bien['type']; ?></td>
                                    <td><?php echo $bien['prix']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="#" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!--    put custom scripts for this page-->
    <?php $scripts = [
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js',
        'js/demo/datatables-demo.js',
    ]; ?>
<?php include_once "partials/footer.php" ?>