<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Program Studi</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_prodi/prodi/add') ?>" class="btn btn-primary btn-sm mb-2">Tambah
                    Data</a>
                <table class=" table  table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Prodi</th>
                            <th>Kode Dikti</th>
                            <th>Nama Prodi</th>
                            <th>Singkatan</th>
                            <th>Jenjang</th>
                            <th>Akreditasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->kode_prodi ?>
                                </td>
                                <td>
                                    <?= $datas->kode_dikti ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td>
                                    <?= $datas->singkatan ?>
                                </td>
                                <td>
                                    <?= $datas->jenjang ?>
                                </td>
                                <td>
                                    <?= $datas->akreditasi ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('project/data_prodi/prodi/edit/' . $datas->kode_prodi) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_prodi/prodi/delete/' . $datas->kode_prodi) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>