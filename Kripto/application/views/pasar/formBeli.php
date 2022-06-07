<title><?php echo $judul ?></title>

<div class="row">
        <h1>Grafik Kripto</h1>
        <div class="col-lg-12">
            <figure class="highcharts-figure">
                <div id="container"></div> 
            </figure>
        <div class="formBeli" style="font-size:18px;">
                <div class="row mt-4">
                    <div class="col-md-6">

                        <form action="<?php echo base_url()."index.php/pasar/beliKripto"?>" method="POST" style="background-color: #201275; padding:25px; border-radius :20px;">
                            <div class="form-group">
                                <label for="namaKripto">Nama Kripto</label><br>                               
                                <select class="custom-select" id="namaKripto" name="nama_kripto">
                                    <option>BTC</option>
                                    <option>ETH</option>
                                    <option>XRP</option>
                                    <option>USDT</option>
                                    <option>BUSD</option>
                                    <option>DOGE</option>
                                </select>
                                </div> 

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="total">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
                    
       