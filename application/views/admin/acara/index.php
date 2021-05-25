<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Acara</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#!">Acara</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->

            <div class="col-md-12">
                <?php
                // var_dump($this->session->flashdata('acara'));
                // die;
                ?>
                <?php if ($this->session->flashdata('acara')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>Data <strong>Acara </strong>Berhasil <?= $this->session->flashdata('acara') ?>
                    </div>
                <?php endif ?>
                <div class="card">

                    <div class="card-header">
                        <h5>Acara</h5>
                    </div>

                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="<?= base_url('acara/tambah') ?>" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i> Add Event</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tables-dtb" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Acara</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    <?php foreach ($acara as $a) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $a['nama_acara'] ?></td>
                                            <td>
                                                <a href="<?= base_url('acara/ubah/') ?><?= $a['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                                <a href="<?= base_url('acara/hapus/') ?><?= $a['id'] ?>" id="delete" class="btn btn-danger btn-sm remove">Delete</a>
                                            </td>

                                        </tr>

                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>