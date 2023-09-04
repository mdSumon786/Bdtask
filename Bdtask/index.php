<!DOCTYPE html>
<?php 
 ob_start();
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    $string = file_get_contents("sd.json");
    $json_a = json_decode($string, true);
    // echo $json_a;
    ?>
    <div class="container mt-4">
        <div class="logout">
            <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
        </div>
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>S1</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Department</th>
                    <th>Sesion</th>
                </tr>
            </thead>
            <tbody>
                <?php if() ?>
                <?php foreach($json_a as $k=> $value){?>
                <tr>
                    <td><?php echo $k+1?></td>
                    <td><?php echo $value['name']?></td>
                    <td><?php echo $value['roll']?></td>
                    <td><?php echo $value['department']?></td>
                    <td><?php echo $value['sesion']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>