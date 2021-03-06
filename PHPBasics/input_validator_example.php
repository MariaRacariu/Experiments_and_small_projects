<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require('input_validator_example_user_validator.php');

    if (isset($_POST['submit'])) {
        // Validate enteries
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Validator Example</title>
    <link rel="stylesheet" href="input_validator_example_style.css">
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
            <div class="error">
                <?php echo $errors['username'] ??'' ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
            <div class="error">
                <?php echo $errors['email'] ??'' ?>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>