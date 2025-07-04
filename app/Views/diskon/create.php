<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Tambah Diskon</h1>

<!-- Notifikasi Error -->
<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('error') ?>
  </div>
<?php endif; ?>

<!-- Notifikasi Sukses -->
<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('success') ?>
  </div>
<?php endif; ?>

<form method="post" action="<?= base_url('diskon/store') ?>">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required
            value="<?= old('tanggal') ?>">
    </div>
    <div class="mb-3">
        <label for="nominal" class="form-label">Nominal</label>
        <input type="number" name="nominal" class="form-control" required
            value="<?= old('nominal') ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
