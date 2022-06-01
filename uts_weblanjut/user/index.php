<!DOCTYPE html>
<html lang="en">
<?php
    include('../config/proses.php');
    include('../login/require_auth.php');

    $title = 'Table User';
    $sub_title = 'List';
    $table = 'users';

    if( isset($_GET['delete']) ) {
        $delete = $db->delete("$table", "id={$_GET['delete']}");

        if($delete){
            header('Location: index.php');
        }

    }
?>
<head>
    <?php include('../layouts/head.php') ?>
</head>

<body onload="startTime()">
    <!-- Loader starts-->
    
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include('../layouts/topbar.php') ?>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <?php include('../layouts/sidebar.php') ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3><?= $title ?></h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item"><?= $title ?></li>
                                    <li class="breadcrumb-item active"><?= $sub_title ?></li>
                                </ol>
                            </div>
                            <div class="col-lg-6">
                                <!-- Bookmark Start-->
                                
                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row second-chart-list third-news-update">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5><?= $title ?></h5>
                                    <span>Grid with filtering, editing, inserting, deleting, sorting and paging. Data provided by controller.</span>
                                </div>
                                <div class="card-body">
                                    <?php if($user['role'] == 1){ ?>
                                    <a href="form.php">
                                        <button class="btn btn-gradient mb-3">Tambah Data</button>
                                    </a>
                                    <?php } ?>
                                    <table class="jsgrid-table" style="margin-bottom: 20px;">
                                        <thead>
                                            <tr class="jsgrid-header-row" style="height: 55px;">
                                                <th class="jsgrid-header-cell">ID</th>
                                                <th class="jsgrid-header-cell">Nama</th>
                                                <th class="jsgrid-header-cell">Role</th>
                                                <th class="jsgrid-header-cell">Username</th>
                                                <?php if($user['role'] == 1){ ?>
                                                <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center">Aksi</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $qw = $db->get("*", "$table");
                                            foreach ($qw as $data) {
                                            ?>
                                            <tr class="jsgrid-row" style="height: 55px;">
                                                <td class="jsgrid-cell">
                                                    <?= $data['id'] ?>
                                                </td>
                                                <td class="jsgrid-cell">
                                                    <?= $data['name'] ?>
                                                </td>
                                                <td class="jsgrid-cell">
                                                <?= isset($data['role']) ? ($data['role'] == 1 ? 'Admin' : 'Pengguna') : '' ?>
                                                </td>
                                                <td class="jsgrid-cell">
                                                    <?= $data['username'] ?>
                                                </td>
                                                <?php if($user['role'] == 1){ ?>
                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
                                                    <a href="form.php?id=<?= $data['id'] ?>" class="btn btn-sm p-0">
                                                        <i class="fa fa-pencil text-md text-primary"></i>
                                                    </a>
                                                    <a href="?delete=<?= $data['id'] ?>" class="btn btn-sm p-0">
                                                        <i class="fa fa-trash text-danger mr-2"></i>
                                                    </a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            
            <?php include('../layouts/footer.php') ?>
        </div>
    </div>


    <?php include('../layouts/script.php') ?>
</body>

</html>