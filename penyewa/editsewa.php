<?php
// include 'koneksi.php';

// if(isset($_POST['ubah'])){
    
//     $name_p = $_FILES['FotoMobil']['name'];
//     $sumber_p = $_FILES['FotoMobil']['tmp_name'];
//     move_uploaded_file($sumber_p, $folder. $name_p);
//     $id = $_POST['id'];
//     $MerekMobil = $_POST['MerekMobil'];
//     $TipeMobil = $_POST['TipeMobil'];
//     $Deskripsi = $_POST['Deskripsi'];
//     $Harga = $_POST['Harga'];
//     $sql = "UPDATE tbmobil
//                 SET Merek='$MerekMobil', 
//                     TipeMobil='$TipeMobil', 
//                     PlatNomer='$Deskripsi',
//                     FotoMobil='$name_p', 
//                     Harga='$Harga' 
//                 WHERE id='$id'";
//     $query = mysqli_query($konek, $sql);

//     if($query) {
//         header("location:ShowCarList.php?pesan=update");
//     } else {
//         die("Perubahan Gagal Disimpan");
//     }
// }
// if(isset($_POST['batal'])){
//     header("location:ShowCarList.php");
// }
// else {
//     die("Gagal terhubung dengan database!");
// }

?>