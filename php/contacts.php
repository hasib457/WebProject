<?php
    session_start();
    if(isset($_SESSION['id'])){
        
        $connect=mysqli_connect("localhost","root","","webProject");
        $sql="SELECT * FROM contacts ";
        $res=mysqli_query($connect,$sql);
        $data=array();

        while($row= mysqli_fetch_assoc($res)){
            $data[]=$row;
        }
    }else{
        header("location: login.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/contact-style.css">
    <title>contacts</title>
</head>
<body>
    <div class="header">
        <h4 class="title">Messages</h4>
    </div>
    <div class="table">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Message</th>
                <th>Date</th>
                <th>Email</th>
                <th>Contact</th>
            </thead>
            <tbody>
                <?php foreach($data as $value ){ ?>
                    <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['msg'] ?></td>
                            <td><?php echo $value['date'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            
                            
                            <td>
                                <div class="button-wrapper">
                                    <a class="btn" href="mailto:<?php echo $value['crs_id'] ?>">CONTACT</a>
                                </div>
                            </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="button-wrapper">
        <a class="btn" href="logout.php" >LOGOUT</a>
    </div>    
</body>
</html>

