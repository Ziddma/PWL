<div class="row">
        <div class="col-lg-12">

            <div class="riwayat" style="margin-top: 30px; margin-bottom: 30px;" >
                <h1>Transaksi</h1>

                    <div class="container-fluid" style="font-size: 15px; text-align:center ;">

                    <div class="table-responsive-xl">
                        <table class="table table-bordered " style="color: white;" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kripto </th>
                                    <th>Harga </th>
                                    <th>Total </th>
                                    <th>Aksi </th>

                                </tr>
                            </thead>
                            <tbody >
                            <?php foreach($dataKripto as $dat) : ?>
                                <tr>
                                    <td><?php echo $dat['no']?></td>
                                    <td><?php echo $dat['nama_kripto']?></td>
                                    <td><?php echo $dat['harga']?><br></td>
                                    <td><?php echo $dat['total']?></td> 
                                    
                                    <td style="width: 20% ;"><a href="<?php echo base_url()."index.php/pasar/jualKripto/".$dat['nama_kripto']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Jual</a>
                                    <a href="<?php echo base_url()."index.php/pasar/ambil_DataWhere/".$dat['nama_kripto']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Update</a>
                                    </td>
                                </tr>   
                                
                                
                                <?php endforeach; ?>
                                
                            </tbody>
                            </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
         
