<?php

    include("config/db.connect.php");

    if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

		if(mysqli_query($conn, $sql)){
			header('Location: Work.php');
		} else {
			echo 'query error: '. mysqli_error($conn);
		}
    }

    //check GET req. id parameter
    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn, $_GET['id']);
        
        //make sql query
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        //get result
        $result = mysqli_query($conn, $sql);

        //fetch
        $pizza = mysqli_fetch_assoc($result);

        //free result
        mysqli_free_result($result);

        //close connection
        mysqli_close($conn);

    }

?> 

<!DOCTYPE html>
<html lang="en">

    <?php include 'Templates/header.php' ?>
    
    <div class="container center">
        <?php if($pizza): ?>

            <h4><?php echo htmlspecialchars($pizza['name']); ?></h4>
            <p>Requested by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo date($pizza['created_at']); ?></p>
            <h5>Ingredients</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

            <!-- DELETE FORM -->
            <form action="details.php" method="POST">
                <!-- make the parameter inside [] the same in your phpmyadmin  -->
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['Id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

        <?php else: ?>
            <h5>No such pizza exists!</h5>

        <?php endif; ?>
    </div>

    <?php include 'Templates/footer.php' ?>

</html>