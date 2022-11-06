<?php


include 'header.php';
$data = PDO_FetchAll("SELECT * FROM sirketler");
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
                    <h4 class="card-title">ŞİRKETLER</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>İsmi</th>
                                    <th>Adres</th>
                                    <th>Ülke</th>
                                    <th>ISO</th>
                                    <th>Telefon</th>
                                    <th>Posta Kodu</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) {
                                ?>


                                <tr>

                                    <td> <?php echo $data[$i]['sirket_ad']; ?></td>
                                    <td> <?php echo $data[$i]['sirket_adres']; ?></td>
                                    <td> <?php echo $data[$i]['sirket_ulke']; ?></td>
                                    <td><?php echo $data[$i]['sirket_iso']; ?></td>
                                    <td><?php echo $data[$i]['sirket_tel']; ?></td>
                                    <td><?php echo $data[$i]['sirket_pk']; ?></td>
                                    <td><button class="btn mb-1 btn-rounded btn-primary btn-xs"><i
                                                class="fa fa-pencil"></i></button><button
                                            class="btn mb-1 btn-rounded btn-danger btn-xs"><i
                                                class="fa fa-trash "></i></button></td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>İsmi</th>
                                    <th>Adres</th>
                                    <th>Ülke</th>
                                    <th>ISO</th>
                                    <th>Telefon</th>
                                    <th>Posta Kodu</th>
                                    <th>İşlemler</th>
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