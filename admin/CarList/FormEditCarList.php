<?php
include '../../Koneksi/koneksi.php';

if(!isset($_GET['id']) ){
    header('Location: ShowCarList.php');
}

$id = $_GET['id'];

if($id == null){
    header('Location: ShowCarList.php');
}

$sql = "SELECT * from tbmobil WHERE id=$id " ;
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data mobil tidak ditemukan !");
}
?>

<!DOCTYPE html>
<html>
<!-- Bootsrap -->
<link rel="stylesheet" href="css/bootstrap.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css">

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light" style="background-color: #412496;">
        <div class="container-fluid py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="img/logo.png" width="50" height="50" class="navbar-logo" alt="">
                BRAVO RENT CAR
            </a>

        </div>
    </nav>
    <!-- //End Navbar Session -->

    <div class="container-fluid">
        <!-- flex-container -->
        <div class="row d-flex justify-content-center align-content-center mt-3 mx-1 card">
            <!-- Judul-form -->
            <h1 class="text-center border-bottom border-dark py-4">Form Edit Car List</h1>
            <form name="FormEditCars" method="post" enctype="multipart/form-data" action="EditCarList.php">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                <!-- user-input -->
                <div class="mx-3">
                    <label class="form-label mt-3">Tipe Mobil </label>
                    <input type="text" class="form-control" name="TipeMobil" value="<?php echo $data['TipeMobil']?>">
                    <label class="form-label mt-3 ">Deskirpsi </label>
                    <input type="text" class="form-control" name="Deskripsi" value="<?php echo $data['Deskripsi']?>">
                    <label class="form-label mt-3 ">Foto Mobil</label>
                    <input type="file" class="form-control" name="FotoMobil" value="<?php echo $data['FotoMobil']?>">
                    <label class="form-label mt-3 ">Harga</label>
                    <input type="number" class="form-control" name="Harga" value="<?php echo $data['Harga']?>">
                    <!-- Button -->
                    <div class=" d-flex my-5">
                        <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel"
                            name="batal">
                        <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan"
                            name="ubah">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>