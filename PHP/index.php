<?php
    
    include ('config/db_connect.php');

    $sql = 'SELECT title, ingredients, id FROM opencode_pizza';
    $result = mysqli_query($conn, $sql);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($pizzas); 
    mysqli_free_result($result);
    mysqli_close($conn);

    


    
    








?>


<!DOCTYPE html>
<html>

    <?php include('templates/header.php') ?>        

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
        

            <?php foreach($pizzas as $pizza) { ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']) ?> </h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                                    <li><?php echo htmlspecialchars($ing) ?> </li> 
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div> 

            <?php } ?>



        </div>
    </div>











    <?php include('templates/footer.php') ?>

</html>


<!-- // ############################# Top Note #############################
    // global keyword is used when you want to have access to some varibale from outside of the in inside the function.
    // include(); is another usefull function used form including other code form other files.
    // require(); is also like include() but with the different that in case of any error the code after it will not be runed.
    // htmlspecialchars(); it will save you from xss attacks.
    
    // $jawidsAge = 20;

    // function ageCalc() {
    //     global $jawidsAge;
    //     echo "Your age is $jawidsAge";
    // };
    // in the function we are saying to use the jawidsAge from global level, not from fucntion level whcih normal it does.
    // ageCalc(); -->
