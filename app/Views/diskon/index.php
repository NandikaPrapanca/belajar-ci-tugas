<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Manajemen Diskon</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <a href="<?= base_url('diskon/create') ?>" class="btn btn-primary mt-3 mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Diskon
            </a>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif ?>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($diskon as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td>Rp <?= number_format($row['nominal'], 0, ',', '.') ?></td>
                            <td>
                                <a href="<?= base_url('diskon/edit/'.$row['id']) ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="<?= base_url('diskon/'.$row['id']) ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</section>
<?= $this->endSection() ?>
