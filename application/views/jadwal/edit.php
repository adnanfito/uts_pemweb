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
                                Edit Jadwal
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
                                    <label for="ruang" class="form-label">Nama Ruang</label>
                                    <input type="text" class="form-control" id="ruang" name="ruang"
                                        value="<?= $result['nama_ruang'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="matkul" class="form-label">Mata Kuliah :
                                    </label>
                                    <select class="form-select" aria-label="Default select example" name="matakuliah">
                                        <?php foreach ($matakuliah as $row) : ?>
                                        <?php if($row['id_matakuliah']==$result['id_matakuliah']) { ?>
                                        <option value="<?= $row['id_matakuliah'] ?>" selected>
                                            <?= $row['nama_matakuliah'] ?>
                                        </option>
                                        <?php }else{?>
                                        <option value="<?= $row['id_matakuliah'] ?>"> <?= $row['nama_matakuliah'] ?>
                                        </option>
                                        <?php } endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="mulai" class="form-label">Jam Mulai</label>
                                    <input type="time" class="form-control" id="mulai" name="mulai"
                                        value="<?= $result['jam_mulai'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="selesai" class="form-label">Jam Selesai</label>
                                    <input type="time" class="form-control" id="selesai" name="selesai"
                                        value="<?= $result['jam_selesai'] ?>">
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