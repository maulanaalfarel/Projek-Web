<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card shadow">
        <div class="card-header">Form Tambah User</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/create/') ?>" class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="form-group">
                            <label for="aktif">Aktif</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" value="Y">
                                <label class="form-check-label" for="aktif">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" value="N">
                                <label class="form-check-label" for="aktif">Tidak</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>