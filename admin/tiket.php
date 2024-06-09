<?php
$model = new Tiket();
$data_Tiket = $model->dataTiket();
?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tiket</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tiket</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <!-- tombol tambah untuk armada form -->
                                <a href="index.php?url=tiket_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                                <!-- tombol selesai -->
                                    <thead>
                                        <tr>
                                            <th>Id Tiket</th>
                                            <th>Harga</th>
                                            <th>jadwal_ID</th>
                                            <th>jenis_tiket_id</th>
                                            <th>rute_id</th>
                                            <th>Armada_id</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Tiket</th>
                                            <th>Harga</th>
                                            <th>Jadwal_ID</th>
                                            <th>jenis_tiket_id</th>
                                            <th>rute_id</th>
                                            <th>Armada_id</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($data_Tiket as $row){

                                        ?>
                                        <tr>
                                            <td><?= $row['id_tiket'] ?></td>
                                            <td><?= $row['harga'] ?></td>
                                            <td><?= $row['jadwal_id'] ?></td>
                                            <td><?= $row['jenis_tiket_id'] ?></td>
                                            <td><?= $row['rute_id'] ?></td>
                                            <td><?= $row['armada_id'] ?></td>
                                            <td>
                                                <form action="tiket_controller.php" method="POST">
                                                    <a href="index.php?url=tiket_form&idedit=<?= $row['id_tiket'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
                                                    
                                                    <!-- tombol hapus -->
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin menghapus?')">
                                                        Hapus
                                                    </button>
                                                    <input type="hidden" name="idx" value="<?= $row['id_tiket']; ?>"/>
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