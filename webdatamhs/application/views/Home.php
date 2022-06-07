<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url()."assets/css/styles.css" ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">B.E.T Crypto Curreny</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url()."index.php/hal_admin/baca_form"; ?>">Nambah Data</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url()."index.php/hal_utama/logout/"; ?>">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <br><br><br><br>
                <main style="background-color:dark-gray;">
                    <h1 style="margin-left:50px;">Halo Semua</h1>
                    <div class="col-md-12" >
                        <h1 class="text-center"><b>CRYPTO CURRENCY</b></h1>
                    </div>
                    <div class="container-fluid" style="padding-top: 5rem; background-color: lightgrey; padding-bottom: 5rem; border-radius: 25px; width: 1400px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                <img src="<?php echo base_url()."assets/cp.jpg"; ?>" alt="" style="display: flex; width: 300px; border-radius: 10%; margin-left: 80px;">
                                </div>
                                <div class="col-md-6">
                                    <h3><b>Apa Itu Crypto?</b></h3>
                                    <p style="margin-top: 30px;">Mata uang kripto adalah aset digital yang dirancang untuk bekerja sebagai media pertukaran yang menggunakan kriptografi yang kuat untuk mengamankan transaksi keuangan, mengontrol proses pembuatan unit tambahan, dan memverifikasi transfer aset.

                                        Mata uang kripto yang paling terkenal adalah bitcoin, selain bitcoin masih ada ribuan mata uang kripto, di antaranya ehtereum, litecoin, ripple, stellar, dogecoin, cardano, tether, monero, tron, dll. Mata uang kripto menggunakan kontrol terdesentralisasi sebagai lawan dari mata uang digital terpusat dan sistem perbankan sentral.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" style="padding-top:5rem;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center" style="padding-bottom:3rem;"><b>Jenis-Jenis Crypto</b></h3>
                                </div>
                                <div class="col-md-4"  style="padding-top: 5rem; background-color: lightgrey; padding-bottom: 5rem; border-radius: 25px; margin-right: 20px; margin-left: -40px;">
                                    <img src="<?php echo base_url()."assets/btc.jpg"; ?>" alt="" style="border-radius: 25%; width: 250px; margin-left: 50px;">
                                    <p style="padding-top: 3rem;"><b>Bitcoin</b>  adalah sebuah uang elektronik yang dibuat pada tahun 2009 oleh Satoshi Nakamoto. Nama tersebut juga dikaitkan dengan perangkat lunak sumber terbuka yang dia rancang, dan juga menggunakan jaringan peer-to-peer tanpa penyimpanan terpusat atau administrator tunggal di mana Departemen Keuangan Amerika Serikat menyebut bitcoin sebuah mata uang yang terdesentralisasi . </p>
                                    <h5 class="text-center" style="padding-top: 5rem;"><b>Nilai Konversi Bitcoin(/hari ini)</b></h5>
                                    <img src="<?php echo base_url()."assets/ssbtc.png"; ?>" style="width: 350px;" alt="">
                                </div>
                                <div class="col-md-4"  style="padding-top: 5rem; background-color: lightgrey; padding-bottom: 5rem; border-radius: 25px;  margin-right: 20px;"> 
                                    <img src="<?php echo base_url()."assets/etc.jpg"; ?>" alt="" style="border-radius: 25%; width: 230px; margin-left: 50px;">
                                    <p style="padding-top: 3rem;"><b>Ethereum (ETH atau Ξ)</b>  adalah sebuah platform rantai-blok dengan fungsi kontrak cerdas.[2] Ethereum mempunyai fungsi seumpama virtual machine yang bisa menjalankan kontrak cerdas peer-to-peer dengan uang kripto Ether (ETH). Ethereum merupakan sebuah projek besar yang dimulai oleh Vitalik Buterin pada tahun 2013.[3] Blok pertama Ethereum ditemui pada 30 Juli 2015. Ether adalah unit tanda uang platform Ethereum. Ether diperdagangkan di bursa crytocurrency atau exchange seperti mata uang kripto lainnya.</p>
                                    <h5 class="text-center" style="padding-top: 2rem;"><b>Nilai Konversi Ethereum(/hari ini)</b></h5>
                                    <img src="<?php echo base_url()."assets/ssetc.png"; ?>" alt="" style="width: 300px; margin-left: 50px; padding-top: 3rem;">
                                </div>
                                <div class="col-md-4"  style="padding-top: 5rem; background-color: lightgrey; padding-bottom: 5rem; border-radius: 25px;">
                                    <img src="<?php echo base_url()."assets/terra.png"; ?>" alt="" style="border-radius: 25%; width: 200px; margin-left: 70px;">
                                    <p style="padding-top: 3rem;"><b>Terra Luna</b> merupakan proyek berbasis blockchain yang dikembangkan oleh Terra Labs di Korea Selatan. Blockchain Terra bertujuan melacak nilai dolar AS. Koinnya disebut stablecoin, seperti Tether dan USDC. Sebelum kejatuhannya, Terra Luna masuk dalam 10 aset kripto dengan nilai kapitalisasi pasar terbesar di dunia.</p>
                                    <h5 class="text-center" style="padding-top: 8rem;"><b>Nilai Konversi Terra(/hari ini)</b></h5>
                                    <img src="<?php echo base_url()."assets/sster.png"; ?>" alt="" style="width: 300px; margin-left: 50px; padding-top: 3rem;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pengunjung</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Data Pengunjung
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($dataMu as $dat){?>
                                            <tr>
                                                <td><?php echo $dat['id']; ?></td>
                                                <td><?php echo $dat['nama']; ?></td>
                                                <td><?php echo $dat['nim']; ?></td>
                                                <td><?php echo $dat['alamat']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url()."index.php/hal_admin/hapus_Data/".$dat['id']; ?>">Hapus<a> | 
                                                    <a href="<?php echo base_url()."index.php/hal_admin/ambil_datawhere/".$dat['id']; ?>">Update<a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;"class="text-muted">Copyright &copy; RPROJECT Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."assets/js/scripts.js" ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."assets/js/datatables-simple-demo.js" ?>"></script>
    </body>
</html>
