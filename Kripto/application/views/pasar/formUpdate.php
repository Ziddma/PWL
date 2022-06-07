<div class="row">
        <div class="col-lg-12">

            <div class="riwayat" style="margin-top: 30px; margin-bottom: 30px;" >
                <h1>Transaksi</h1>

                    <div class="container-fluid" style="font-size: 15px; text-align:center ;">

                    <div class="table-responsive-xl">
                        
                        <table class="table table-bordered " style="color: black; justify-content:center; background-color:white;"  >
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
                            <form action="<?php echo base_url()."index.php/pasar/perbaharui" ?>" method="POST" >
                            <?php foreach($dataKripto as $dat)  ?>
                                <tr>

                                    <td><input type="number" name="no" value="<?php echo $dat['no']?>"></td>
                                    <td><input type="text" name="nama_kripto" value="<?php echo $dat['nama_kripto']?>"></td>
                                    <td><input type="number" name="harga" value="<?php echo $dat['harga']?>"></td>
                                    <td><input type="number" name="total" value="<?php echo $dat['total']?>"></td>
                                    <td><input type="submit"></td>
                                    
                                    
                                    </td>
                                </tr>
                                </form>   
                                
                                
                                
                                
                            </tbody>
                            </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
         
