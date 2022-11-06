<?php


include 'header.php';
$data = PDO_FetchAll("SELECT * FROM urunler");
?>
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-sm-10">ÜRÜNLER</h4>
                        <button class=" col-sm-2 btn mb-1 btn-rounded btn-success btn-sm">Yeni
                            Ekle</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Ürün Tür</th>
                                    <th>Ürün İsim</th>
                                    <th>Gtip</th>
                                    <th>Lab No</th>
                                    <th>Lab Tarih</th>
                                    <th>Parti No</th>
                                    <th>Lab Geçerlilik</th>
                                    <th>işlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) {
                                ?>


                                <tr>
                                    <td> <?php if ($data[$i]['urun_tur'] == 1) {
                                                    echo 'TAZE';
                                                } elseif ($data[$i]['urun_tur'] == 2) {
                                                    echo 'DONMUŞ';
                                                } elseif ($data[$i]['urun_tur'] == 3) {
                                                    echo 'KURU';
                                                }
                                                ?>
                                    </td>
                                    <td> <?php echo $data[$i]['urun_isim']; ?></td>
                                    <td> <?php echo $data[$i]['urun_gtip']; ?></td>
                                    <td> <?php echo $data[$i]['urun_lab_no']; ?></td>
                                    <td><?php echo $data[$i]['urun_lab_tarih']; ?></td>
                                    <td><?php echo $data[$i]['urun_parti_no']; ?></td>
                                    <td><?php echo $data[$i]['urun_lab_gecerlilik']; ?></td>
                                    <td><button class="btn mb-1 btn-rounded btn-primary btn-xs"><i
                                                class="fa fa-pencil"></i></button><button
                                            class="btn mb-1 btn-rounded btn-danger btn-xs"><i
                                                class="fa fa-trash "></i></button></td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Ürün Tür</th>
                                    <th>Ürün İsim</th>
                                    <th>Gtip</th>
                                    <th>Lab No</th>
                                    <th>Lab Tarih</th>
                                    <th>Parti No</th>
                                    <th>Lab Geçerlilik</th>
                                    <th>işlemler</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

include 'footer.php';
?>