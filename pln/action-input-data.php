<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $pel_id    = $_POST['pel_id'];
    $pel_id_gol            = $_POST['pel_id_gol'];
    $pel_seri        = $_POST['pel_seri'];
    $pel_nama  = $_POST['pel_nama'];
    $pel_no        = $_POST['pel_no'];
    //validasi data data kosong
    if (empty($_POST['pel_id'])||empty($_POST['pel_id_gol'])||empty($_POST['pel_nama'])||empty($_POST['pel_no'])) {
        ?>
        <?php
    }
    else {
    include "../../koneksi.php";
    $cek=mysql_num_rows (mysql_query("SELECT pel_id FROM tb_pelanggan WHERE pel_id='$_POST[pel_id]'"));
    if ($cek > 0) {
    ?>

    <?php
    }
    //Masukan data ke Table
    $input    ="INSERT INTO tb_pelanggan (pel_id,pel_id_gol,jurusan,pel_nama,pel_no) VALUES ('$pel_id','$pel_id_gol','$jurusan','$pel_nama','$pel_no')";
    $query_input =mysql_query($input);
    if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
        alert('Input Data tb_pelanggan Berhasil');
    
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Input Data tb_pelanggan Gagal!, Silahkan diulangi!";
    }
//Tutup koneksi engine MySQL
    mysql_close($Open);
    }
}
?>