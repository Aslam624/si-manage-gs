<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Peminjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_bahan WHERE id_bahan='" . $_GET ['id_bahan'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID.Bahan</td> <td><?= $data['id_bahan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Bahan</td> <td><?= $data['nm_bahan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Beli</td> <td><?= $data['tgl_beli'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td> <td><?= $data['jml'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=BAHAN&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Bahan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

