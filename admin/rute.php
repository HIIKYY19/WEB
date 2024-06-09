<?php
$model = new Rute();
$data_rute = $model->dataRute();
?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Rute</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="index.php?url=rute_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Kota Asal</th>
                                            <th>Kota Tujuan</th>
                                            <th>Jarak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Kota Asal</th>
                                            <th>Kota Tujuan</th>
                                            <th>Jarak</th>                                           
                                            <th>Aksi</th>

                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach ($data_rute as $rute){
                                        ?>
                                       
                                       <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $rute['kode'] ?></td>
                                            <td><?= $rute['kota_asal'] ?></td>
                                            <td><?= $rute['kota_tujuan'] ?></td>
                                            <td><?= $rute['jarak'] ?></td>
                                            <td>
                                                <form action="rute_controller.php" method="POST">
                                                    <a href="index.php?url=rute_form&idedit= <?= $rute ['idrute'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
                                                
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('anda Yakin akan menghapus')">Hapus</button>
                                                    <input type="hidden" name="idx" value=" <?= $rute ['idrute'] ?> ">
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