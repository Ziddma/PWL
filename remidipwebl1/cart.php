<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- CSS -->
      <style>
        .header{
          padding:12px 100px;
          position: fixed;
          left: 0;
          top: 0;
          z-index: 99;
          width: 100%;
          background-color: var(#0c1023);
        }

        .topnav {
          background-color:transparent;
          overflow: hidden;
        }
        
        .topnav a {
          float: left;
          color:var(#ffffff);
          text-align: center;
          padding: 14px 20px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: gray;
          opacity: 0.3;
          color:white;
          border-radius: 15%;
          animation: infinite;
          animation-duration: 0.2s;
          transform: scale(1.2);
          
        }
        .topnav a.active {
          color:var(#eaa023);
        }
      </style>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>Cart</title>
  </head>

  <body>
      <!-- Navbar -->
      <header class="header">
        <div class="topnav">
          <a class="active" href="index.php">Home</a>
          <a href="#">Cart</a>
        </div>
      </header>
      <!-- End Navbar -->

      <br><br><br>

      <div class="container mt-5">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Bayar</th>
              </tr>
          </thead>
          <tbody>
            <?php
            session_start();
            $total = 0;
            if (!empty($_SESSION['cart'])){
              echo "<p>Jumlah data: ".sizeof($_SESSION['cart']['arrCart'])."</p>";
              $max=sizeof($_SESSION['cart']['arrCart']);
              
              for ($i=0;$i<$max;$i++){
                echo "<tr>";
                foreach ($_SESSION['cart']['arrCart'][$i] as $key => $val){
                  echo "<td>" .$val. "</td>";
                }
                foreach($_SESSION['cart']['arrCart'] as $key){
                    $total = $total + $key['hrg'];
                }
              }
              echo "</tr>";
            }else
              echo "cart kosong";
            ?>
          </tbody>
        </table>
        <br>
        <h5>Total Pembayaran Rp <?php echo number_format($total,0,',','.');?> </h5>
        <br>
        <a class='btn btn-success' href=cartRemove.php>Kosongkan Cart</a>
        </br>
      </div>
  </body>
</html>