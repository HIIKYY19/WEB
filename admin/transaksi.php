<?php
$model = new Transaksi();
$data_transaksi = $model->DataTransaksi();

?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Transaksi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Database</li>
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a href="index.php?url=transaksi_form">
                               <button class="btn btn-sm btn-primary">Tambah</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id_transaksi</th>
                                            <th>Total tiket</th>
                                            <th>Total harga</th>
                                            <th>penumpang_id</th>
                                            <th>tiket_id</th>
                                            <th>tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id_transaksi</th>>
                                            <th>Total tiket</th>
                                            <th>Total harga</th>
                                            <th>penumpang_id</th>
                                            <th>tiket_id</th>
                                            <th>tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($data_transaksi as $row){
                                       ?>
                                        <tr>
                                            <td><?= $row['id_transaksi'] ?> </td>
                                            <td><?= $row['total_tiket'] ?> </td>
                                            <td><?= $row['totalharga'] ?> </td>
                                            <td><?= $row['penumpang_id'] ?> </td>
                                            <td><?= $row['tiket_id'] ?> </td>
                                            <td><?= $row['tanggal'] ?> </td>
                                            <td>
                                            <form action="transaksi_controller.php" method="POST">
                                                    <a href="index.php?url=transaksi_form&idedit=<?=$row['id_transaksi']?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                    onclick="return confirm('anda Yakin akan menghapus')" >Hapus</button>
                                                    <input type="hidden" name="idx" value="<?=$row['id_transaksi']?> ">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>