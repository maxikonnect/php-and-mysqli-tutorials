<?php 
    include 'config.php';
	$email = $title = $ingredients = '';
	$errors = array('email' => '', 'title' => '', 'ingredients' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

			// create sql
			$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

			// save to database and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
		}

	} // end POST check

?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php' ?>
    <section class="form-container">
        <header class="form-header"><span>add a pizza<span></header>
        <form action="add.php" method="POST">
            <div class="inputBox">
                <label for="email">email:</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" required>
                <div class="red-text"><?php echo $errors['email']; ?></div>
                
            </div>
            <div class="inputBox">
                <label for="email">pizza title :</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
                <div class="red-text"><?php echo $errors['title']; ?></div>
            </div>
            <div class="inputBox">
                <label for="email">ingredients (comma separated) :</label>
                <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients)?>">
                <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            </div>
           <div class="submit-container">
                <input type="submit" value = "submit" name="submit" class="submit-btn btn">
            </div>
        </form>
    </section>
    <?php include 'footer.php' ?> 
    </body>
</html>