<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Menu</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_menu WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">

                        <tr>
                            <td>No.id</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Menu</td> <td><?= $data['nm_menu'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Menu</td> <td><?= $data['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['hrg'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td> <td><?= $data['stok'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=menu&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Menu </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

