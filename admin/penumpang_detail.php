<?php
$id = $_REQUEST['id'];
$model = new penumpang();
$penumpang = $model->getpenumpang($id);
?>

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $penumpang['nama']?></h1>
                        <h1 class="display-5 fw-bolder"><?= $penumpang['gender']?></h1>
                        <h1 class="display-5 fw-bolder"><?= $penumpang['no_telepon']?></h1>
                        <h1 class="display-5 fw-bolder"><?= $penumpang['berat_bawaan']?></h1>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                            <button type="button" class="btn btn-info"><a href="index.php?url=penumpang">Kembali</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>