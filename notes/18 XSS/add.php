<?php

// _GET is global array
// isset - checks if a variable is set
// if(isset($_GET['submit'])) {

//     echo $_GET['title'];
//     echo $_GET['email'];
//     echo $_GET['ingredients'];
// }

if (isset($_POST['submit'])) {
    // Convert special characters to HTML entities
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">
        Add a pizza
    </h4>
    <form action="add.php" method="POST" class="white">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma seperated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>

</body>

</html>