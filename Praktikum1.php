<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'header.php' ; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
<?php include_once 'navbar.php' ; ?>
<?php include_once 'sidebar.php' ; ?>
<?php include_once 'content_wrapper.php' ; ?>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Array Buah</h3>
            <br>
            <?php
            $array_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
            // menampilkan array
            echo $array_buah[0].'<br>';
            // menampilkan jumlah array
            echo"menampilkan jumlah data array".count($array_buah). '<br>';
            // menambahkan data array
            foreach ($array_buah as $key => $value) {
                echo"menambahkan data array ke-".$key.'=>' .$value. '<br>';
            }
            echo '<hr>';
            // menampilkan array dengan list
            echo '<ol>';
            foreach($array_buah as $value) {
                echo '<li>' .$value. '</li>';
            }
            echo '</ol';
            ?>
            </div>
          </div>
         </div>
        </div>
      </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
            <div class="card-header">
            <h3 class="card-title">Sort Array</h3>
            <br>
            <?php 
            // array buah
            $array_buah = [
                'p'=>"Pepaya",
                'm'=>"Mangga",
                'a'=>"apel",
                'j'=>"Jambu" 
            ];
            //menampilkan array dengan foreach
            echo '<ol>';
            foreach($array_buah as $key => $value) {
                echo '<li>' .$key. ' - ' .$value. '</li>';
            }

            echo '</ol>';
            sort($array_buah);
            echo '<hr/>';

            foreach($array_buah as $key => $value) {
                echo '<li>' .$key. ' - ' .$value. '</li>';
            }
            ?>
           </div>
          </div>
         </div>
        </div>
      </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Array Pop</h3>
            <br>
            <?php
            $tims = ['erwin', 'heru', 'ali', 'zaki'];
            array_pop($tims);
            foreach($tims as $person) {
                echo $person. '<br/>';
            }
            ?> 
           </div>
          </div>
         </div>
        </div>
      </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
            <div class="card-header">
            <h3 class="card-title">Array Push</h3>
            <br>
            <?php
            $tims = ['erwin', 'heru', 'ali', 'zaki'];
            array_push($tims);
            foreach($tims as $person) {
                echo $person. '<br/>';
            }
            ?> 
            </div>
          </div>
         </div>
        </div>
      </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
            <div class="card-header">
            <h3 class="card-title">Array Shift</h3>
            <br>
            <?php
            $tims = ['erwin', 'heru', 'ali', 'zaki'];
            array_shift($tims);
            foreach($tims as $person) {
                echo $person. '<br/>';
            }
            ?> 
           </div>
          </div>
         </div>
        </div>
      </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Array Unshift</h3>
            <br>
            <?php
            $tims = ['erwin', 'heru', 'ali', 'zaki'];
            array_unshift($tims);
            foreach($tims as $person) {
                echo $person. '<br/>';
            }
            ?>
           </div>
          </div>
         </div>
        </div>
      </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Variable</h3>
            <br>
            <?php
            $nama = "Firdaus";
            $umur = 19;
            $berat = 94;

            echo"Nama saya $nama, umur saya $umur tahun, dan berat saya $berat kg";
            ?>
           </div>
          </div>
         </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Variable Konstan</h3>
            <br>
            <?php
              define('PHI',3.14);
              define('DBNAME','db_mahasiswa');
              define('DBSERVER','localhost');
              define('DBUSER','root');
              define('DBPASS','Firdaus');

              $jari = 10;
              $luas = PHI * $jari * $jari;
              $kll = 2 * PHI * $jari;
              echo 'Luas Lingkaran dengan Jari-Jari '.$jari.' : '.$luas;
              echo '<br/>Kelilingnya : '.$kll;
              
              echo'<hr>';

              echo 'Nama databasenya : '.DBNAME.'<br>';
              echo 'Server Database : '.DBSERVER.'<br>';
              echo 'Nama user database: '.DBUSER.'<br>';
              echo 'Password database: '.DBPASS.'<br>';
              ?>
           </div>
          </div>
         </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Variable System</h3>
            <br>
            <?php
            echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
            echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
            ?>
           </div>
          </div>
         </div>
        </div>
      </div>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php' ; ?>

</body>
</html>
