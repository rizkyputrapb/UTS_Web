<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['student_name']; ?></h5>
                    <p class="card-text">
                        <label for=""><b> Nim:</b></label>
                        <?= $mahasiswa['nim']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Birthplace:</b></label>
                        <?= $mahasiswa['birthplace']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Birthdate:</b></label>
                        <?= $mahasiswa['birthdate']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Majors:</b></label>
                        <?= $mahasiswa['majors']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Address:</b></label>
                        <?= $mahasiswa['address']; ?>
                    </p>
                    <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>