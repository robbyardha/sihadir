<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Peserta</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#!">Peserta</a></li>
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
                <div class="card">
                    <div class="card-header">
                        <h5>Peserta</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="<?= base_url('peserta/tambah') ?>" class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i> Add Peserta</a>
                            </div>
                        </div>
                        <?php $no=1;?>
                        <div class="table-responsive">
                            <table id="tables-dtb" class="table table-bordered table-striped mb-3 mx-auto">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php foreach ($joinsiswa as $s) :?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s['nis'];?></td>
                                        <td><?= $s['nama'];?></td>
                                        <td><?= $s['nama_kelas'];?></td>
                                        <td><?= $s['keterangan'];?></td>
                                        <td>
                                            <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach?>
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