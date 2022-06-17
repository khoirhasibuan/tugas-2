<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="pln";
 $koneksi= mysql_connect($host,$user,$pass);
 $pilihdatabase  = mysql_select_db($db,  $koneksi);
 if  ($pilihdatabase) echo "<h3>Koneksi Berhasil </h3><hr><br/>";
 else echo "Koneksi Gagal <br/>";
?>