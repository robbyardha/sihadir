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
                            <li class="breadcrumb-item"><a href="#!">Tambah Peserta</a></li>
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
                    <div class="row align-items-center text-center">
                        <div class="col-md-12">
                                
                                
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('admin/peserta');?>">
                                    <div class="form-group mb-3 mt-4">
                                        <label class="floating-label" for="nis">NIS</label>
                                        <input type="text" class="form-control" id="nis" name="nis" placeholder="">
                                        <small class="text-danger">NIS Tidak Valid</small>
                                    </div>
                                    <div class="form-group mb-3 mt-4">
                                        <label class="floating-label" for="nama_siswa">Nama Siswa</label>
                                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="">
                                        <small class="text-danger">Nama Tidak Valid</small>
                                    </div>
                                    <?php foreach ($kelas AS $k) :?>
                                    <div class="form-group mb-3 mt-4 mx-auto">
                                        <label class="floating-label" for="kelas">Kelas</label>
                                        <!-- <input type="text" class="form-control" id="kelas" name="kelas" placeholder=""> -->
                                        <select class="form-group ml-2 mb-3 mt-4" name="kelas" id="kelas">
                                        <option ><?= $k['nama_kelas']; ?></option>
                                        </select>
                                        <small class="text-danger">Kelas Tidak Valid</small>
                                    </div>
                                    <?php endforeach ?>
                                    <div class="form-group mb-3 mt-4">
                                        <label class="floating-label" for="status">Status</label>
                                        <input type="text" class="form-control" id="status" name="status" placeholder="">
                                        <small class="text-danger">Status Tidak Valid</small>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm btn-round has-ripple"><i class="feather icon-plus"></i> Add Event</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>