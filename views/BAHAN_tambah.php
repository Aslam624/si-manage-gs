<?php
$id_bahan=$_GET['id_bahan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_bahan WHERE id_bahan ='$id_bahan'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Bahan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    
						<div class="form-group">
                            <label for="nm_bahan" class="col-sm-3 control-label">Nama Bahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_bahan" class="form-control" id="inputEmail3" placeholder="Nama Pemesan">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_beli" class="col-sm-3 control-label">Tanggal Beli</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_beli" class="form-control" id="inputEmail3" placeholder="Tanggal Pesanan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-3">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Tanggal Pesanan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jml" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-3">
                                <input type="text" name="jml" class="form-control" id="inputEmail3" placeholder="Tanggal Pesanan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Bahan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=BAHAN&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pesan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nm_bahan=$_POST['nm_bahan'];
	$tgl_beli=$_POST['tgl_beli'];
	$harga=$_POST['harga'];
    $jml=$_POST['jml'];
    //buat sql
    $sql="INSERT INTO tbl_bahan VALUES ('','$nm_bahan','$tgl_beli','$harga', '$jml')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Bahan Error");
	//$sqlArsip="UPDATE tbl_menu SET status='Dipinjam' WHERE no_perkara='$nope'";
    //$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	//$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=BAHAN&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
