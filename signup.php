<html lang="en">
<head>
    <title>Fabulor | SignUP</title>
    <link type="text/css" rel="stylesheet" href="css.css">
</head>
<body>
<div class="welcome_text">
<?php
require_once "database_config.php";
$input_email = $input_username = $input_password = '';
$email_err = $username_err = $password_err= '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_email = trim($_POST["input_email"]);
    if (empty($input_email)) {
        $email_err = "Please enter a email.";
?>

        <div class="notice_email_error">
            Please enter a email
        </div>
<?php
    }
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        // Set the value of param username
        $param_email = trim($_POST['input_email']);
        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                $email_err = "This email is already taken";
                ?>
    <div class="same_email_error">
        <?php echo $email_err; ?>
    </div>
<?php
            } else {
                $input_email = trim($_POST['input_email']);
            }
        } else {
            echo "Something went wrong";
        }
    }
    else{
        $email = $input_email;
    }

    if (empty(trim($_POST["input_username"]))) {
        ?>
        <div class="username_error">
            Username Cannot be blank
</div>
<?php
                } else {
                    $input_username = trim($_POST['input_username']);
                }
            }

if(empty(trim($_POST['input_password']))){
        $password_err = "Password cannot be blank"
        ?>
    <div class="password_error">
        Password cannot be blank
    </div>
    <?php
    } elseif (strlen(trim($_POST['input_password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
        ?>
        <div class="password_error">
            Password cannot be less than 5 characters
        </div>
    <?php
    } else {
        $input_password = trim($_POST['input_password']);
    }

    if (empty($email_err) && empty($username_err) && empty($password_err)) {
        $sql = "INSERT INTO users (email, name, password) VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",  $param_email, $param_username, $param_password);

            // Set parameters
            $param_email = $input_email;
            $param_username  = $input_username;
            $param_password = password_hash($input_password, PASSWORD_DEFAULT);
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
            }
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        }

        // Close statement
        mysqli_stmt_close($stmt);
// Close connection
    }
    mysqli_close($conn);
?>
    <div class="back_button">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="#C3073F" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
        </a>
    </div>
    <form class="sign_box" method="POST" action="" enctype="multipart/form-data">
        <h1>Sign UP</h1>
        <div class="email">EMAIL : </div>
        <input type="email" placeholder="Enter Email" name="input_email" id="input_email">
        <div class="username">USERNAME : </div>
        <input type="text" placeholder="Create Username" name="input_username" id="input_username">
        <div class="password">PASSWORD : </div>
        <input type="password" placeholder="Create Password" name="input_password" id="input_password">
        <input type="file" name="photo" id="photo">
        <div class="signup_thing">
            <button id="register" type="submit">CREATE</button>
        </div>
    </form>
</div>
</body>
</html>
