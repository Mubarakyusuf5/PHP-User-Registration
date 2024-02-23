<?php 
include 'connect.php';

if(isset($_POST['btn'])){
    $name =$_POST['fname'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql = "insert into `users` (fname, email, password) 
VALUES('$name', '$email', '$password')";
$result = mysqli_query($con,$sql);
if($result){
    header('location:log.php');
}
 else{     
    die(mysqli_error( $con));
}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            flex-direction: column;
        }
        h2{
            font-size: 1.6rem;
        }
        .form-control input{
            padding: 7px;
            font-size: 15px;
        }
        .form-control{
            margin-bottom: 10px;
        }
        button{
            padding: 10px;
            width: 100%;
            cursor: pointer;
            background-color: dodgerblue;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            outline: none;
            border: none;
        }
    </style>
</head>
<body>
    <h2>Registration Page</h2>
    <form action="" method="post">
        <div class="form-control">
            <input type="text" name="fname" class="form-control" placeholder="Enter Fullname">
        </div>
        <div class="form-control">
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-control">
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" name="btn" >submit</button>
    </form>
</body>
</html>