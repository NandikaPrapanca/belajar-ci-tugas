<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Edit Diskon</h1>
<form method="post" action="<?= base_url('diskon/update/'.$diskon['id']) ?>">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" value="<?= $diskon['tanggal'] ?>" class="form-control" readonly>
    </div>

    <div class="mb-3">
        <label for="nominal" class="form-label">Nominal</label>
        <input type="number" name="nominal" value="<?= $diskon['nominal'] ?>" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>

<?= $this->endSection() ?>
