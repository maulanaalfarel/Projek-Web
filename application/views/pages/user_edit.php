<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card shadow">
        <div class="card-header">Form Edit User</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/update/' . $data->email) ?>" class="user form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="<?= $data->email ?>">
                            <input type="hidden" name="where" value="<?= $data->email ?>">

                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="<?= $data->password ?>">
                        </div>
                        <div class="form-group">
                            <label for="aktif">Aktif</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" value="Y" <?php if ($data->aktif == 'Y')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="aktif">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="aktif" value="N" <?php if ($data->aktif == 'N')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="aktif">Tidak</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>