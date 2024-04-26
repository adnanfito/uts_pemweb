<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <div class="content-wrapper">

        <!-- Main Content -->
        <section class="content mx-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mb-3 w-100">Daftar Jadwal</h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Tambah Jadwal
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3 ">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Ruang</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jam mulai</th>
                                        <th>Jam selesai</th>
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
                                        <td><?= $data['nama_ruang'] ?></td>
                                        <td><?= $data['nama_matakuliah'] ?></td>
                                        <td><?= $data['jam_mulai'] ?></td>
                                        <td><?= $data['jam_selesai'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>jadwal/edit/<?= $data['id_jadwal'] ?>"
                                                class="badge bg-success p-2">Edit</a>
                                            <a href="<?= base_url() ?>jadwal/delete/<?= $data['id_jadwal'] ?>"
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
                <h5 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jadwal</h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>jadwal/create" method="post" id="form">
                    <div class="mb-3">
                        <label for="ruang" class="form-label">Nama Ruang</label>
                        <input type="text" class="form-control" id="ruang" name="ruang">
                    </div>
                    <div class="mb-3">
                        <label for="matkul" class="form-label">Mata Kuliah :
                        </label>
                        <select class="form-select" aria-label="Default select example" name="matakuliah">
                            <?php  foreach ($matakuliah as $row) : ?>
                            <option value="<?= $row['id_matakuliah'] ?>"> <?= $row['nama_matakuliah'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mulai" class="form-label">Jam Mulai</label>
                        <input type="time" class="form-control" id="mulai" name="mulai">
                    </div>
                    <div class="mb-3">
                        <label for="selesai" class="form-label">Jam Selesai</label>
                        <input type="time" class="form-control" id="selesai" name="selesai">
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