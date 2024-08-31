
<?php 
include("../koneksi.php");
echo"aska";
if(isset($_POST['nama'])){
    $nama=$_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    $kel=$_POST['kel'];
    $pengguna = mysqli_query($koneksi, "INSERT INTO `pengguna` ( `nama`, `no_hp`, `email`, `kel`) VALUES ('$nama', '$no_hp', '$email', '$kel')");
    $id_pengguna = mysqli_insert_id($koneksi);
    $kota=$_POST['kota'];
    $provinsi=$_POST['provinsi'];
    $kode_pos=$_POST['kode_pos'];
    $alamat_lanjutan=$_POST['alamat_lanjutan'];
    $alamat = mysqli_query($koneksi, "INSERT INTO `alamat` ( `kota`, `provinsi`, `kode_pos`, `alamat_lanjutan`) VALUES ('$kota', '$provinsi', '$kode_pos', '$alamat_lanjutan')");;
    $id_alamat = mysqli_insert_id($koneksi);
    $id_ticket = $_POST['id'];
    $id_konser = $_POST['id_konser'];
    $qty = $_POST['qty'];
    $tanggal = date('Y-m-d');
    $total = $_POST['total'];
    $payment = $_POST['payment'];
    $data = mysqli_query($koneksi, "INSERT INTO `beli` ( `id_ticket`, `id_konser`, `id_pengguna`, `id_alamat`, `qty`,`total`, `payment`) VALUE ('$id_ticket','$id_konser', '$id_pengguna','$id_alamat','$qty',  '$total', '$payment')");
 
header('location:../payment.php');
 

}else{
    echo"aSAJKGS";
}
