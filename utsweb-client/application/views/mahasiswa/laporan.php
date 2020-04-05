<!DOCTYPE html>
<html>
<head>
    <title>Report Table</title>
    <style type="text/css">
        #outtable{
            padding:20px;
            border:1px solid #e3e3e3;
            width:600px;
            border-radius:5px;
        }
        .short{
            width:50px;
        }
        .normal{
            width:150px;
        }
        table{
            border-collapse:collapse;
            font-family:arial;
            color:#5E5B5C;
        }
        thead th{
            text-align:left;
            padding:10px;
        }
        tbody td{
            border-top:1px solid #e3e3e3;
            padding:10px;
        }
        tbody tr:nth-child(even){
            background:#F6F5FA;
        }
        tbody tr:hover{
            background:#EAE9F5;
        }
    </style>
</head>
<body>
    <div id="outtable">
        <table>
            <thead>
                <tr>
                    <th class="short">#</th>
                    <th class="normal">Name</th>
                    <th class="normal">Nim</th>
                    <th class="normal">Birthplace</th>
                    <th class="normal">Birthdate</th>
                    <th class="normal">Majors</th>
                    <th class="normal">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($mahasiswa as $user): ?>
                    <tr>
                        <th><?php echo $no; ?></th>
                        <th><?php echo $user->student_name; ?></th>
                        <th><?php echo $user->nim; ?></th>
                        <th><?php echo $user->birthplace; ?></th>
                        <th><?php echo $user->birthdate; ?></th>
                        <th><?php echo $user->majors; ?></th>
                        <th><?php echo $user->address; ?></th>
                    </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody> 
        </table>
    </div>
</body>
</html>