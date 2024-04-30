<?php 

    include 'config/db_connect.php';

    $email = $title = $ingredients = '';

    $errors = array('email' => '', 'title' => '', 'ingredients' => '');

    if (isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $title = htmlspecialchars($_POST['title']);
        $ingredients = htmlspecialchars($_POST['ingredients']);
        
        
        if (empty($email)){
            $errors['email'] = "Email is Required. <br>";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Email is not Valid. <br>";
        }


        if (empty($title)){
            $errors['title'] = "Title is Required. <br>";
        } else {
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) $errors['title'] = "Title is not valid. <br>";
        }
        
        if (empty($ingredients)){
            $errors['ingredients'] = "Ingredients is Required. <br>";
        } else {
            if (!preg_match('/^[a-zA-Z\s]+(,\s?[a-zA-Z\s]*)*$/', $ingredients)) $email['ingredients'] = "Ingredients should be sparated by comma. <br>";
        }

        if (!array_filter($errors)){
            $email_db = mysqli_real_escape_string($conn, $_POST['email']);
            $title_db = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients_db = mysqli_real_escape_string($conn, $_POST['ingredients']);

            $sql_add = "INSERT INTO opencode_pizza(email, title, ingredients) VALUE ('$email_db', '$title_db', '$ingredients_db')";

            if(mysqli_query($conn,$sql_add)){
                header('Location: index.php');
            } else {
                echo "Something went wrong (data not saved): ". mysqli_errno($conn);
            }
        }
    }


?>

<!-- <script> window.location = "https://www.google.com" </script> -->

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>

    <section class="contanier grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Pizza Type</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title);?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label>Ingredients (comma separated)</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients);?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>
</html>