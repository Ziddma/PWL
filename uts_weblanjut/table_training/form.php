<?php
include('../config/proses.php');
$role = 1;
include('../login/require_auth.php');

$title = 'Table Training';
$sub_title = 'Form';

if( isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['address']) ){
    // var_dump("masuk");

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    if( isset($_GET['id']) ){
        /**
         * Proses Update
         */
        $update = $db->update(
            "table_nya_ganti",
            "name = '{$name}', gender = '{$gender}', age = '{$age}', address = '{$address}'", 
            "id={$_GET['id']}");
            
        if($update){
            header('Location: index.php');
        }
    }else {
        /**
         * Proses Insert
         */

        $insert = $db->insert('table_nya_ganti', 'name, gender, age, address',
        "'{$name}', '{$gender}', '{$age}', '{$address}'");

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
     $q = $db->get('*', 'table_nya_ganti', "where id={$_GET['id']}");
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
                                            <label for="gender">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="gender" name="gender"  value="<?= isset($data['gender']) ? $data['gender'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="age">Umur</label>
                                            <input type="number" class="form-control" id="age" name="age" value="<?= isset($data['age']) ? $data['age'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">alamat</label>
                                            <textarea class="form-control" name="address" id="" cols="30" rows="5"><?= isset($data['address']) ? $data['address'] : '' ?></textarea>
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