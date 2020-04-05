<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                <!-- untuk menampilkan pesan error -->
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif ?>
                    <form action=""method="post">
                        <!-- http://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="student_name">Name</label>
                            <input type="text" class="form-control" id="student_name" name="student_name">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="birthplace">Birthplace</label>
                            <input type="text" class="form-control" id="birthplace" name="birthplace">
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>
                        <div class="form-group">
                            <label for="majors">Majors</label>
                            <select class="form-control" id="majors" name="majors">
                            <?php foreach($majors as $key): ?>
                                <option value="<?= $key ?>"selected><?= $key ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>