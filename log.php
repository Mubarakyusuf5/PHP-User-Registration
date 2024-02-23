<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Log</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h2>Registered Users</h2>
        <a class="delete-btn" href="register.php">Add user</a>

    <table>
        <thead>
            <tr>
                <th>s/n</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * from `users` ";
        $result = mysqli_query($con,$sql);
        if($result){ 
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $fname = $row['fname'];
                $email = $row['email'];
                $password = $row['password'];
                echo '<tr>
                <th>'.$id.'</th>
                <td>'.$fname.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td><a href="delete.php?deleteid='.$id.'" class="delete-btn">delete</a></td>
            </tr>';
            }

        }
        ?>
    </table>

</body>

</html>