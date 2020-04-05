<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Merubah Data Mahasiswa
                </div>
                <div class="card-body">
                <!-- untuk menampilkan pesan error -->
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif ?>
                    <form action=""method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <!-- http://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="student_name">Name</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" value="<?= $mahasiswa['student_name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'];?>">
                        </div>
                        <div class="form-group">
                            <label for="birthplace">Birthplace</label>
                            <input type="text" class="form-control" id="birthplace" name="birthplace" value="<?= $mahasiswa['birthplace'];?>">
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $mahasiswa['birthdate'];?>">
                        </div>
                        <div class="form-group">
                            <label for="majors">Majors</label>
                            <select class="form-control" id="majors" name="majors">
                                <?php foreach($majors as $key): ?>
                                    <?php if($key == $mahasiswa['majors']): ?>
                                        <option value="<?= $key ?>"selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= $mahasiswa['address'];?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>