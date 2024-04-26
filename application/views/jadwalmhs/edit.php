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
                                Edit Jadwal Mahasiswa
                            </h3>
                            <!-- Button trigger modal -->
                            <a href="<?= base_url() ?>jadwal" type="button" class="btn btn-primary">
                                Kembali
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3 ">
                            <form action="" method="post" id="form">
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Nama Mahasiswa :
                                    </label>
                                    <select class="form-select d-block" aria-label="Default select example" name="nama">
                                        <?php foreach ($mahasiswa as $row) : ?>
                                        <?php if($row['nim']==$result['nim']) { ?>
                                        <option value="<?= $row['nim'] ?>" selected>
                                            <?= $row['nama'] ?>
                                        </option>
                                        <?php }else{?>
                                        <option value="<?= $row['nim'] ?>"> <?= $row['nama'] ?>
                                        </option>
                                        <?php } endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jadwal" class="form-label"> Jadwal :
                                    </label>
                                    <select class="form-select d-block" aria-label="Default select example"
                                        name="jadwal">
                                        <?php foreach ($jadwal as $row) : ?>
                                        <?php if($row['id_jadwal'] == $result['id_jadwal']) { ?>
                                        <option value="<?= $row['id_jadwal'] ?>" selected>
                                            <?= $row['nama_ruang'] ?> | <?= $row['nama_matakuliah'] ?> |
                                            <?= $row['jam_mulai'] ?>-<?= $row['jam_selesai'] ?>
                                        </option>
                                        <?php }else{?>
                                        <option value="<?= $row['id_jadwal'] ?>">
                                            <?= $row['nama_ruang'] ?> | <?= $row['nama_matakuliah'] ?> |
                                            <?= $row['jam_mulai'] ?>-<?= $row['jam_selesai'] ?>
                                        </option>
                                        <?php } endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" form="form">Update</button>
                            </form>
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