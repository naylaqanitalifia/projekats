<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Kalkulator</title>
  </head>
  <body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angkaPertama = $_POST["angkaPertama"];
        $angkaKedua = $_POST["angkaKedua"];
        $operator = $_POST["operator"];

        switch ($operator) {
            case '+':
                $hasil = $angkaPertama + $angkaKedua;
                break;  

            case '-':
                $hasil = $angkaPertama - $angkaKedua;
                break;

            case '*':
                $hasil = $angkaPertama * $angkaKedua;
                break;

            case '/':
                $hasil = $angkaPertama / $angkaKedua;
                break;
            
            default:
                echo "<script>alert('Mohon Lengkapi Form!');window.location.href='$_SERVER[PHP_SELF]';</script>";
                return;
              }
    }
    ?>
    
    <div class="container bg-warning p-5">
        <form method="post" action="">
            <h1>Kalkulator</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="angkaPertama">Angka Pertama</label>
                  <input type="number" class="form-control" id="angkaPertama" name="angkaPertama" placeholder="Silahkan masukkan angka" step="any" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="angkaKedua">Angka Kedua</label>
                    <input type="number" class="form-control" id="angkaKedua" name="angkaKedua" placeholder="Silahkan masukkan angka" step="any" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="operator">Operator Aritmatika</label>
                <select name="operator" id="operator" class="form-control" required>
                    <option value="pilih">--Pilih Operator--</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" name="hasil" value="Cek Hasil" >
              </div>
        </form>

        <?php if (isset($_POST["hasil"])) { ?>
          <label for="hasil">Hasil</label>
          <input type="text" class="form-control" id="hasil" value="<?php echo $angkaPertama . " " . $operator . " " . $angkaKedua . " " . "=" . " " . $hasil; ?>" readonly>
        <?php }else { ?>
          <label for="hasil">Hasil</label>
          <input type="text" placeholder="0" id="hasil" class="form-control">
        <?php } ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <!-- <script>
    window.onload = function() {
      document.getElementById("angkaPertama").value = "";
      document.getElementById("angkaKedua").value = "";
      document.getElementById("hasil").value = "0";
      alert("Memuat Ulang Halaman?");
      document.getElementById("operator").value = "pilih";
    }
    </script> -->



  </body>
</html>
