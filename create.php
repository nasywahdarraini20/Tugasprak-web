<?php session_start();
  if(isset($_POST['submit'])){
    require 'config.php';
      $insertOneResult = $collection->insertOne([
        'Kode_Pesanan' => $_POST['Kode_Pesanan'],
        'Kategori' => $_POST['Kategori'],
        'Nama_Pesanan' => $_POST['Nama_Pesanan'],
        'Harga' => $_POST['Harga'],
        'Stok' => $_POST['Stok'],
        'Jumlah_Pesanan' => $_POST['Jumlah_Pesanan'],
      ]);
      echo  "<script> 
              alert('Data Pesanan berhasil ditambahkan!');
              document.location.href = 'index.php';
            </script>";
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tugas Prak PAW</title>
  <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<!-- Style -->
<style> 
  .bl{
    padding: 10px;
  }
  .container{
    width: 100%;
    margin-top: 2%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.7);
    padding: 5%;
    $gradient: linear-gradient(150deg, rgba($white, .12), rgba($white, 0));
  }
  h3 {
    font-family: Cheeky Rabbit;
    font-weight: bold;
    color: #534D9D;
    font-size: 40px;
  }
  table{
    background-color: #97B4D6;
    font-family: Tekton Pro;
  }
</style>
<body>
  <div class="container col-md-8">
  <div class="row justify-content-center">
    <div class="col">
      <h3 class="text-center mb-4">Create Data</h3>
      <form method="POST">
        <table class="table table-hover">
          <div class="container2">
            <tr>
              <td for="Kode_Pesanan">Kode_Pesanan</td>
              <td><input type="text" class="form-control" name="Kode_Pesanan" required="required"></td>
            </tr>
             
            <tr>
              <td for="Kategori">Kategori</td>
              <td><input type="text" class="form-control" name="Kategori" required="required"></td>
            </tr>
             
             <tr>
              <td for="Nama_Pesanan">Nama_Pesanan</td>
              <td><input type="text" class="form-control" name="Nama_Pesanan" required="required"></td>
            </tr>
             
            <tr>
              <td for="Harga">Harga</td>
              <td><input type="text" class="form-control" name="Harga" required="required"></td>
            </tr>

            <tr>
              <td for="Stok">Stok</td>
              <td><input type="text" class="form-control" name="Stok" required="required"></td>
            </tr>
             
            <tr>
              <td for="Jumlah_Pesanan">Jumlah_Pesanan</td>
              <td><input type="text" class="form-control" name="Jumlah_Pesanan" required="required"></td>
            </tr>
          </div>
        </table> 
        <div align="right">
          <button type="submit" name="submit" class="btn btn-primary bi bi-check-circle" style="font-family: Tekton Pro"> Submit </button>
          <a href="index.php" class="btn btn-danger bi bi-arrow-right-circle" style="font-family: Tekton Pro"> Cancel </a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>