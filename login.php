<html lang="en">
<head>
    <title>Fabulor | LOGIN</title>
    <link type="text/css" rel="stylesheet" href="css.css">
</head>
<body>
<div class="welcome_text">
<?php
session_start();
if(isset($_SESSION['input_email']))
{
    header("location: main.php");
    exit;
}
require_once "database_config.php";
$input_email = $input_password = "";
$err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

if(empty(trim($_POST['input_email'])) || empty(trim($_POST['input_password'])))
{ ?>
<div class="password_error">
    Please Enter a valid Email and Password
</div>
    <?php
}
else{
    $input_email = trim($_POST['input_email']);
    $input_password = trim($_POST['input_password']);
}
if(empty($err))
{
$sql = "SELECT id, email, password FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $param_email);
$param_email = $input_email;

 if(mysqli_stmt_execute($stmt)){
  mysqli_stmt_store_result($stmt);
   if(mysqli_stmt_num_rows($stmt) == 1)
   {
    echo "1";
    mysqli_stmt_bind_result($stmt, $id, $input_email, $hashed_password);
    if(mysqli_stmt_fetch($stmt))
    {
        if(password_verify($input_password, $hashed_password))
        {
            // this means the password is correct. Allow user to login
            session_start();
            $_SESSION["input_email"] = $input_email;
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;
            //Redirect user to welcome page
            header("location: main.php");
        }
        else{
          ?>
            <div class="password_error">
                Invalid password or email
            </div>
    <?php
        }
    }

}else {
    echo "error";
}
}
}
}
?>

<div class="back_button">
    <a href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="#C3073F" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
        </svg>
    </a>
</div>
<form class="sign_box" method="POST" >
    <h1>LOGIN</h1>
    <div class="email">EMAIL : </div>
    <input type="email" placeholder="Enter Email" name="input_email" id="input_email">
    <div class="password">PASSWORD : </div>
    <input type="password" placeholder="Enter Password" name="input_password" id="input_password">
    <div class="signup_thing">
        <button id="register" type="submit">LAUNCH!</button>
    </div>
</form>
</div>
</body>
</html>
