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

    <!-- /\ambil css penjadwalan -->
    <!-- Tambahan CSS -->
    <link rel="stylesheet" href="css/style_penjadwalan.css">
    <link rel="stylesheet" href="css/switches_Penjadwalan.css">

    <style type="text/css" href="css/tombol_penjadwalan.css"></style>
    <!--  -->

    <title>Berhasil</title>
  </head>
  <body bgcolor="yellow">
    
    <?php include "templates/navbar_mhs.html" ?>

    <table border="0" width="100%" height="100%" align="center">
      <tr><td colspan="3" bgcolor="yellow"><br></td></tr>
      <tr>
        <td width="25%" bgcolor="yellow" rowspan="2"></td>
        <td width="50%">
          <table cellpadding="20" width="100%" border="0"  height="100%" align="center">
            <tr>
              <td bgcolor="#F5F5F5">
                <center><h3>Update data semester</h3>
          <table class="table table-striped" align="center"> 
            <?php
            $id_semester=$_POST['id_semester'];
            $periode=$_POST['periode'];
            $status=$_POST['status'];
      

            $tmp=$akses->UpdateDataSemester($id_semester,$periode,$status);
            if($tmp==TRUE){
            echo '<CENTER> Selamat Data Berhasil Di Update </CENTER>';
              }   
            else{
            echo'<CENTER> Error </CENTER>';
              }

              echo "<a href='http://localhost/Academic-IS/semester.php'>KEMBALI</a>";
?>
          </table>
          </center>
              </td>
            </tr>
          </table>
        </td>
        <td width="25%" bgcolor="yellow" rowspan="2"></td>
      </tr>
    </table>

    <table cellpadding="27" border="0" width="100%" height="20%">
      <tr align="center">
        <td bgcolor="yellow">
          <div id="footer" style="height:50px; line-height:50px; background:#333; color:yellow;">
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