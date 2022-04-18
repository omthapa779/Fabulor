<html>
<head>
    <link href="css.css" type="text/css" rel="stylesheet">
    <title>FABULOR | Settings</title><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
 <div class="welcome_text">
     <div class="profile-section">
         <h1 class="my_email">
             <?php
             require_once "database_config.php";
             session_start();
               echo ($_SESSION['input_email']);
             ?>
         </h1>
         <h1 class="my_name">
             <?php echo ($_SESSION['input_username']); ?>
         </h1>
         <a href="edit.php?id=<?php echo ($_SESSION['id']);?>" class="edits">
             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
             </svg>
         </a>
     </div>
     <div class="border_logout">
     <a href="logout.php" class="logout_button">LOGOUT</a>
     </div>
     <a style="position: relative; top: -55vh; left: 10vw" href="main.php">
         <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#C3073F" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
             <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
         </svg>
     </a>
 </div>
</body>
</html>
