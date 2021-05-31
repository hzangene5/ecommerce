<?php require_once '../inc/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
       
   
    
</head>

<body>
    <div class='main'>
        <h1>login</h1>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="password" name="password" placeholder="password">
            <button type="submit" name="login">login</button>
        </form>
    </div>
</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $query = mysqli_query($connection, "SELECT * FROM admins WHERE name = '$name' AND password = '$pass'" );

    if(mysqli_num_rows($query) == 1){
        $_SESSION['admin'] = $name;
        header('Location: http://localhost:8080/tes/ecom/admin');
    }else{
        echo 'this not admin';
    }

}

?>