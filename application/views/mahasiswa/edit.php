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
                                Edit Mahasiswa
                            </h3>
                            <!-- Button trigger modal -->
                            <a href="<?= base_url() ?>mahasiswa" type="button" class="btn btn-primary">
                                Kembali
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3 ">
                            <form action="" method="post" id="form">
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        value="<?=  $result['nim'] ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="<?=  $result['nama'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="birth" class="form-label">Tangal Lahir</label>
                                    <input type="date" class="form-control" id="birth" name="birth"
                                        value="<?=  $result['tanggal_lahir'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="<?=  $result['alamat'] ?>">
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