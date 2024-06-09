<?php
$model = new penumpang();
$datapenumpang = $model->datapenumpang();
?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a href="index.php?url=penumpang_form">
                                    <button class="btn btn-sm btn-primary">Tambah</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>No.Telepon</th>
                                            <th>Berat Bawaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>No.Telepon</th>
                                            <th>Berat Bawaan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($datapenumpang as $row){
                                        
                                        ?>
                                        <tr>
                                        <td> <?=$row['id'] ?> </td>
                                        <td> <?=$row['nama'] ?> </td>
                                        <td> <?=$row['gender'] ?> </td>
                                        <td> <?=$row['no_telepon'] ?> </td>
                                        <td> <?=$row['berat_bawaan'] ?> </td>
                                        <td>
                                        <form action="penumpang_controller.php" method="POST">
                                                <a href="index.php?url=penumpang_detail&id=<?= $row['id']?>">
                                                    <button type="button" class="btn btn-info">Detail</button>
                                                </a>
                                                <a href="index.php?url=penumpang_form&idedit=<?= $row['id']?>">
                                                     <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                                </a>
                                                     <button type="submit" class="btn btn-danger dtn-sm" name="proses" value="hapus" 
                                                     onclick="return confirm('anda yakin akan menghapus')">Hapus</button>
                                                <input type="hidden" name="idx" id="" value="<?= $row['id']?>">
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