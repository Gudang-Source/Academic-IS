<?php 
  require_once('database.php');
  $akses = new Database();
  $akses->connect();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Dosen</title>
  </head>
  <body bgcolor="pink">
    <table border="0" width="100%" height="20%">
      <tr>
        <td>
          <img src="head.png" alt="logo" style="width:100%; height:30%; position: relative; z-index: 1; top: 0px;">
          <b><h2 style="position: absolute; top: 25px; left: 72%; z-index: 2; color: pink; font-family: Cooper Black;">Manajemen Skripsi</h2>
          <p style="position: absolute; top: 58px; left: 72%; z-index: 2; color: #F5F5F5; font-family: Times New Roman;">Website Proyek PRPL Kelas C</p></b>
        </td>
      </tr> 
    </table>

    <table border="0" width="100%" height="10%">
      <tr>
        <td>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand"><img src="logo.png" alt="Logo" style="width:60px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Metopen
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="input.php">Pendaftaran Metopen</a>
                    <a class="dropdown-item" href="out.php">Data Mahasiswa Metopen</a>
                    <a class="dropdown-item" href="out2.php">Data Dosen</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Seminar Proposal</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Skripsi
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Bimbingan</a>
                    <a class="dropdown-item" href="#">Penjadwalan</a>
                    <a class="dropdown-item" href="#">Ujian Pendadaran</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-danger" type="button">Search</button>
              </form>
            </div>
          </nav>
        </td>
      </tr> 
    </table>

    <table border="0" width="100%" height="100%" align="center">
      <tr><td colspan="3" bgcolor="pink"><br></td></tr>
      <tr>
        <td width="25%" bgcolor="pink" rowspan="2"></td>
        <td width="50%">
          <table cellpadding="20" width="100%" border="0"  height="100%" align="center">
            <tr>
              <td bgcolor="#F5F5F5">
                <center><h3>Update data mahasiswa metopen</h3>
          <table class="table table-striped" align="center"> 
            <?php

            $nim=$_GET['nim'];
              foreach ($akses->FormUpdateDataMahasiswaMetopen($nim) as $key) {
        echo"
        <table align='center'>
        <tr>
        <td width='700px'>
<form method='POST' action='proses_update.php'>
  <div class='form-group'>
    <label for='formGroupExampleInput'>NIM </label>
    <input name='nim' value='$key[nim]' type='text' readonly class='form-control' id='formGroupExampleInput' placeholder='Example input'>
    <label for='formGroupExampleInput'>NAMA </label>
    <input name='nama' value='$key[nama]' type='text' class='form-control' id='formGroupExampleInput' placeholder='Example input'>
    <label for='formGroupExampleInput'>JENIS KELAMIN</label>
    <input name='jenis_kelamin' value='$key[jenis_kelamin]' type='text' readonly class='form-control' id='formGroupExampleInput' placeholder='Example input'>
    <label for='formGroupExampleInput'>TOPIK </label>
    <input name='topik' value='$key[topik]' type='text' readonly class='form-control' id='formGroupExampleInput' placeholder='Example input'>
  </div>
        
        ";

       }

      ?>     
      
        DOSEN           : <select name="dosen" class='form-control' aria-label='Text input with checkbox' >
                                         <option>- PILIH -</option> 
                                        <?php
                                          $variable = $akses->getDosen();
                                          foreach ($variable as $key) {
                                            echo "
                                            <option value='$key[niy]'> $key[nama] </option>
                                            ";
                                            # code...
                                          }
                                        ?>
                                   </select>
        BIDANG MINAT           : <select name="bidang_minat" class='form-control' aria-label='Text input with checkbox' >
                                         <option>- PILIH -</option> 
                                         <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                         <option value="Sistem Cerdas">Sistem Cerdas</option>
                                         <option value="Multimedia">Multimedia</option>
                                         <option value="Sistem Informasi">Sistem Informasi</option>
                                         <option value="Media Pembelajaran">Media Pembelajaran</option>
                                   </select> 
  <br><table align='center'><input type='submit' name='kirim' value='kirim' class='btn btn-outline-success my-2 my-sm-0'>    
       </tr>  
        </form>
        </td>
        </tr>
        </table>      
  
          </table>
          </center>
              </td>
            </tr>
          </table>
        </td>
        <td width="25%" bgcolor="pink" rowspan="2"></td>
      </tr>
    </table>

    <table cellpadding="27" border="0" width="100%" height="20%">
      <tr align="center">
        <td bgcolor="pink">
          <div id="footer" style="height:50px; line-height:50px; background:#333; color:pink;">
            Copyright &copy; 2019
            Designed by . . . . . . . .
          </div>
        </td>
      </tr> 
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>