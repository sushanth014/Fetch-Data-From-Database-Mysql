<?php
require_once('./db.php');
$query='select * from users';
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Fetchdata</title>
</head>
<body class="bg-dark">
    <div class="con" >
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-head">
                        <h1>Fetch data from database</h1>
                    </div>
                   
                    <div class="card-body">
                        <table class="table">
                            <tr>
    
                                <td style="background-color:darkgray">rollnumber</td>
                                <td style="background-color:darkgray">name</td>
                                <td style="background-color:darkgray">email</td>
                                <td style="background-color:darkgray">number</td> 
                            </tr>
                            <tr>
                                <?php
                                    while($row=mysqli_fetch_assoc($result)){
                                 ?>

                                <td><?php echo $row['rollnumber']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                  </tr>
                                 <?php
                                    }
                                ?>
                           
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>