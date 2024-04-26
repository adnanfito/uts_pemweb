<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <div class="content-wrapper">

        <!-- Main Content -->
        <section class="content mx-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title w-100 mb-3">
                                Daftar Matakuliah
                            </h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Tambah Data Matakuliah
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3 ">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                if($result){
                                    $i = 1;
                                    foreach($result as $data) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $data['nama_matakuliah'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>matakuliah/edit/<?= $data['id_matakuliah'] ?>"
                                                class="badge bg-success p-2">Edit</a>
                                            <a href="<?= base_url() ?>matakuliah/delete/<?= $data['id_matakuliah'] ?>"
                                                class="badge bg-danger p-2">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php 
                                        $i++;
                                    } 
                                }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Main Footer -->

<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel">Tambah Matakuliah</h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>matakuliah/create" method="post" id="form">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form">Tambah</button>
            </div>
        </div>
    </div>
</div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

</body>

</html>