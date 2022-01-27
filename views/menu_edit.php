<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_menu WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Menu</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						<div class="form-group">
                            <label for="nm_menu" class="col-sm-3 control-label">Nama Menu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_menu" value="<?=$data['nm_menu']?>"class="form-control" id="inputEmail3" placeholder="Nama Menu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Menu</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenis" class="form-control">
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Cemilan">Cemilan</option>
                                </select>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="hrg" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="hrg" value="<?=$data['hrg']?>"class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="<?=$data['stok']?>"class="form-control" id="inputEmail3" placeholder="Stok">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=menu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Menu
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$nm_menu=$_POST['nm_menu'];
    $jenis=$_POST['jenis'];
    $hrg=$_POST['hrg'];
    $stok=$_POST['stok'];
    //buat sql
    $sql="UPDATE tbl_menu SET nm_menu='$nm_menu',jenis='$jenis',hrg='$hrg',stok='$stok' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Menu Error");
    if ($query){
        echo "<script>window.location.assign('?page=menu&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



