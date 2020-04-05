<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"> Data Mahasiswa</h1>
    </div>
        <table class="table table-striped table-bordered" id="list_mhs">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Nim</th>
                <th>Birthplace</th>
                <th>Birthdate</th>
                <th>Majors</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                foreach($mahasiswa as $mhs){?>
                    <tr>
                        <th><?= $no++; ?></th>
                        <th><?= $mhs->student_name; ?></th>
                        <th><?= $mhs->nim; ?></th>
                        <th><?= $mhs->birthplace; ?></th>
                        <th><?= $mhs->birthdate; ?></th>
                        <th><?= $mhs->majors; ?></th>
                        <th><?= $mhs->address; ?></th>
                    </tr>
                <?php } ?>
        </tbody>
        </table>
</div>