<?php 
    include 'config/db_connect.php';

    if(isset($_GET['id'])){
        // $id = $_GET['id']; *** this also will work ***
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $theQuery = "SELECT * FROM opencode_pizza WHERE id = $id";
        $result = mysqli_query($conn, $theQuery);

        // $pizzaDitails = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // the line above will also work but you can also use the line bellow.
        $pizzaDitails = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }





?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'templates/header.php' ?>

    <div class="container center ">
        <?php if($pizzaDitails) { ?>
            <h4><?php echo $pizzaDitails['title']; ?></h4>
            <p>Created by: <?php echo $pizzaDitails['email']; ?></p>
            <p>Created at: <?php echo date($pizzaDitails['created_at']) ?></p>
            <h5>Ingredients</h5>
            <p><?php echo $pizzaDitails['ingredients'] ?> </p>
        <?php } else {?>
            <h1>No such pizza exists.</h1>
            <?php } ?>
    </div>




    <?php include 'templates/footer.php' ?>
</html>
