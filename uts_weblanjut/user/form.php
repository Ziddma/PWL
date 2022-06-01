<?php
include('../config/proses.php');

$role = 1;
include('../login/require_auth.php');

$title = 'Table Training';
$sub_title = 'Form';
$table = "users";

if( isset($_POST['name']) && isset($_POST['role']) && isset($_POST['username']) && isset($_POST['password']) ){
    // var_dump("masuk");

    $name = $_POST['name'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if( isset($_GET['id']) ){
        /**
         * Proses Update
         */
        $update = $db->update(
            "$table",
            "name = '{$name}', role = '{$role}', username = '{$username}', password = '{$password}'", 
            "id={$_GET['id']}");
            
        if($update){
            header('Location: index.php');
        }
    }else {
        /**
         * Proses Insert
         */

        $insert = $db->insert("$table", 'name, role, username, password',
        "'{$name}', '{$role}', '{$username}', '{$password}'");

        if($insert){
            header('Location: index.php');
        }
        // var_dump($insert);
    }
}

/**
 * Retriview Data
 */
if( isset($_GET['id']) ) {
     $q = $db->get('*', "$table", "where id={$_GET['id']}");
     $data = [];

     foreach ($q as $key => $item) {
        $data = $item;
     }
}

?>
<!DOCTYPE html>
<html lang="en">

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
                                <div class="card-header" hidden>
                                    <h5><?= $title ?></h5>
                                    <span>Form Insert & Update <?= $title ?>.</span>
                                </div>
                                <form method="post" action="" class="">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= isset($data['name']) ? $data['name'] : '' ?>">
                                            <small id="emailHelp" class="form-text text-muted">Masukan nama lengkap anda.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Role</label>
                                            <select class="form-control" name="role" id="">
                                                <option value="1" <?= isset($data['role']) ? ($data['role'] == 1 ? 'selected' : '') : '' ?> >Admin</option>
                                                <option value="2" <?= isset($data['role']) ? ($data['role'] == 2 ? 'selected' : '') : '' ?> >Pengguna</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= isset($data['username']) ? $data['username'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" value="">
                                        </div>

                                        <button class="btn btn-gradient mb-3">Submit</button>

                                    </div>
                                </form>
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