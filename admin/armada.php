<?php
$model = new Jenis_Armada();
$data_jenisArmada = $model->dataArmada();

$member = $_SESSION['MEMBER'];
if(isset($member)) {

} else {
    echo '<script> alert("anda tidak boleh masuk"); history.back();</script>';
}
?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jenis Armada</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Jenis Armada</li>
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
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <!-- tombol tambah untuk armada form -->
                                <a href="index.php?url=armada_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                                <!-- tombol selesai -->
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Armada</th>
                                            <th>Jenis Armada</th>
                                            <th>Nama Armada</th>
                                            <th>Max Bagasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Armada</th>
                                            <th>Jenis Armada</th>
                                            <th>Nama Armada</th>
                                            <th>Max Bagasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data_jenisArmada as $ja){

                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $ja['idarmada'] ?></td>
                                            <td><?= $ja['jenis_armada'] ?></td>
                                            <td><?= $ja['nama_armada'] ?></td>
                                            <td><?= $ja['kapasitas'] ?></td>
                                            <td>
                                                <form action="armada_controller.php" method="POST">
                                                    <a href="index.php?url=armada_form&idedit=<?= $ja['idarmada'] ?>">
                                                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                    </a>
                                                    
                                                    <!-- tombol hapus -->
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin menghapus?')">
                                                        Hapus
                                                    </button>
                                                    <input type="hidden" name="idx" value="<?= $ja['idarmada']; ?>" />

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