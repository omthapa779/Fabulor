<?php
// Include config file
require_once "database_config.php";

//Define variables and initialize with empty values
$name = $email = "";
$name_err = $email_err = "";
// Processing form data when form is submitted
if (isset($_POST["id"]) && !empty($_POST["id"])) {
// Get hidden input value
    $id = $_POST["id"];

//Validate last name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $last_name_err = "Please enter a name";
        echo "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $last_name_err = "Please enter a valid name";
        echo "Please enter a valid name";

    } else {
        $name = $input_name;
    }
//Validation of email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter a email";
        echo "Please enter a email";
    } else {
        $email = $input_email;
    }

// Check input errors before inserting in database
    if(empty($name_err) && empty($email_err)) {
        // Prepare an update statement
            $sql = "UPDATE users SET name=?, email=? WHERE id=?";
            if ($stmt = mysqli_prepare($conn, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ssi",$param_name, $param_email, $param_id);
                // Set parameters
                $param_name = $name;
                $param_email = $email;
                $param_id = $id;
            }
        }

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {

            // Records updated successfully. Redirect to landing page
            header("location: settings.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
 else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id = trim($_GET["id"]);
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result);

                    // Retrieve individual field value
                    $name = $row["name"];
                    $email = $row["email"];

                } else {

                    // URL doesn't contain valid id. Redirect to error page
                    header("location: settings.php");
                    exit();
                }

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<html>
<head>
    <title>Edit Data</title>
    <link href="css.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="welcome_text">
<form method="post" action="" enctype="multipart/form-data" class="edit_form">
    <h1 style="color: #C3073F; font-family: 'Agency FB'; ">EDIT</h1>
    <br>
<input type="text" name="name" value="<?php echo $name; ?>" style="background: none; font-family: 'Agency FB'; color: #C3073F; font-size: 1.5vw; width: 20vw; text-align: center;"><br><br>
<input type="email" name="email" value="<?php echo $email; ?>" style="background: none; font-family: 'Agency FB'; color: #C3073F; font-size: 1.5vw; width: 20vw; text-align: center;"> <br><br><br>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="submit" value="UPDATE" style="font-family: 'Agency FB'; background: none; color: #C3073F; border: solid 0.2vw #C3073F; font-size: 2vw">
</form>
</div>
</body>
