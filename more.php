<?php 

    if(isset($_POST['submit'])){

        setcookie('gender', $_POST['gender'], time() + 86400);



        session_start();
        $_SESSION['name'] = $_POST['name'];
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="more.php" method="POST">
        <input type="text" name="name">
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="submit" name="submit" value="submit">


    </form>
    
</body>
</html>