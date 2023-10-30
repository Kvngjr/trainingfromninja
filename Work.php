<?php
    include('config/db.connect.php');
    //MySQLi(improved) or PDO(php data object)
    // Connect to database
    // $conn = mysqli_connect('localhost', 'Meatua', 'work1234', 'michael_pizza');

    // //check connection
    // if(!$conn){
    //     echo 'Connection error: ' . mysqli_connect_error();
    // }
 
    //get the data
    $query = 'SELECT name, ingredients, id, email FROM pizzas ORDER BY created_at';

    //make query & fetch data
    $result = mysqli_query($conn, $query);

    //fetch the resulting rows
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);




?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'Templates/header.php' ?>    

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza): ?>
                <div class="col s6 md3 ">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['name']); ?></h6>
                            <ul>
                                <?php foreach(explode( ',', $pizza['ingredients']) as $ing):?>
                                    <li><?php echo htmlspecialchars($ing); ?></li>
                                <?php  endforeach; ?>
                            </ul>
                            <div><?php echo htmlspecialchars($pizza['email']); ?></div>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
 
    <?php include 'Templates/footer.php' ?>

</html>