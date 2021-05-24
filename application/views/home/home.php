<div class="container">
    <div class="col mt-5">
        <h3 class="text-center text-white">Daftar Hadir Peserta Wisuda Tahun 2021</h3>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills bg-white" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">ALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user1-tab" data-toggle="tab" href="#user1" role="tab" aria-controls="user1" aria-selected="true">XII IPA 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user2-tab" data-toggle="tab" href="#user2" role="tab" aria-controls="user2" aria-selected="false">XII IPA 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user3-tab" data-toggle="tab" href="#user3" role="tab" aria-controls="user3" aria-selected="false">XII IPA 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user4-tab" data-toggle="tab" href="#user4" role="tab" aria-controls="user4" aria-selected="false">XII IPA 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user5-tab" data-toggle="tab" href="#user5" role="tab" aria-controls="user5" aria-selected="false">XII IPA 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user5-tab" data-toggle="tab" href="#user6" role="tab" aria-controls="user5" aria-selected="false">XII IPS 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user5-tab" data-toggle="tab" href="#user7" role="tab" aria-controls="user5" aria-selected="false">XII IPS 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="user5-tab" data-toggle="tab" href="#user8" role="tab" aria-controls="user5" aria-selected="false">XII IPS 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                $no = 1;
                ?>
                <div class="tab-content" id="myTabContent">
                    <!-- [ user card1 ] start -->
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="all-tables" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIPD</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($joinsiswa as $s) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <?= $s['nis']; ?>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;"><?= $s['nama'] ?></td>
                                                    <td>
                                                        <?php if ($s['nama_kelas'] == null) : ?>
                                                            <p>Data Kosong</p>
                                                        <?php else : ?>
                                                            <?= $s['nama_kelas'] ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td><span class="badge badge-light-success"><?= $s['keterangan'] ?></span>
                                                    <span class="badge badge-light"><?= $s['time'] ?></span>
                                                        <div class="overlay-edit">
                                                            <a href="#" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>No</th>
                                                <th>NIPD</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Tab 2 -->
                    <div class="tab-pane fade show active" id="user2" role="tabpanel" aria-labelledby="user2-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ipa2" class="table nowrap">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                                <th>NIPD</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //  var_dump($joinsiswaA1); die;
                                          ?>
                                        <?php foreach ($joinsiswaA1 as $a) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <?= $a['nis']; ?>
                                                            </div>
                                                        </div></td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0"><?= $a['nama']?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $a['nama_kelas']?></td>
                                                <td>
                                                    <span class="badge badge-light-danger"><?= $a['keterangan']?></span>
                                                    <div class="overlay-edit">
                                                    <a href="#" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                                <?php endforeach?>
                    <!-- Tab 3 -->
                    <div class="tab-pane fade show active" id="user3" role="tabpanel" aria-labelledby="user3-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ipa3" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">Tasasasases</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPA 3</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4 -->
                    <div class="tab-pane fade show active" id="user4" role="tabpanel" aria-labelledby="user4-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ipa4" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">asdasdasd</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPA 4</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 5 -->
                    <div class="tab-pane fade show active" id="user5" role="tabpanel" aria-labelledby="user5-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ipa5" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">dsgdvsdewr4634</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPA 5</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 6 -->
                    <div class="tab-pane fade show active" id="user6" role="tabpanel" aria-labelledby="user6-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ips1" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">d654561351</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPS 1</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 7 -->
                    <div class="tab-pane fade show active" id="user7" role="tabpanel" aria-labelledby="user7-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ips2" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">d654561sadasdasdqqqqq351</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPS 2</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 8 -->
                    <div class="tab-pane fade show active" id="user8" role="tabpanel" aria-labelledby="user8-tab">
                        <div class="card user-profile-list">
                            <div class="card-body">
                                <div class="dt-responsive table-responsive">
                                    <table id="ips3" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">sadasdwq3e12</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XII IPS 3</td>
                                                <td>
                                                    <span class="badge badge-light-danger">Belum Hadir</span>
                                                    <div class="overlay-edit">
                                                        <button type="button" class="btn btn-icon btn-success"><i class="feather icon-check-circle"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--  -->

                <!--  -->

            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] start -->