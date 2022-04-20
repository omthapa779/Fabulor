<html>
<head>
    <title>Fabulor | Main</title>
    <link type="text/css" rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="welcome_text">
    <div class="menu_overlay">
        <h1><a href="main.php">FABULOR</a></h1>
        <div class="vr"></div>
        <a href="settings.php" class="settings_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-gear-wide" viewBox="0 0 16 16">
                <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"/>
            </svg>
        </a>
        <div class="microphone_on">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-mic-fill" viewBox="0 0 16 16">
                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </div>
        <div class="speakers_on">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-headphones" viewBox="0 0 16 16">
                <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
            </svg>
        </div>
    </div>
    <div class="chat">
        <div class="chat_box" onload="showfunc()" id="chathist">
            <br>
<?php
session_start();
if (isset($_POST['submit'])) {
    $link = mysqli_connect("localhost", "root", "", "fabulor");
    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect."
            . mysqli_connect_error());
    }

    // Escape user inputs for security
    $un = mysqli_real_escape_string(
        $link, $_SESSION['input_username']);
    $m = mysqli_real_escape_string(
        $link, $_REQUEST['msg']);

    date_default_timezone_set('Asia/Kathmandu');
    $ts = date('y-m-d h:ia');

    // Attempt insert query execution
    $sql = "INSERT INTO chats (uname, msg, dt)
                VALUES ('$un', '$m', '$ts')";
    if (mysqli_query($link, $sql)) {
        header("location: main.php");
    } else {
        echo "ERROR: Message not sent!!!";
    }

    // Close connection
    mysqli_close($link);
}

require_once('database_config.php');
$query = "SELECT * FROM chats";
$run = $conn->query($query);
$i=0;

while($row = $run->fetch_array()) :
if($i==0) {
    $i = 5;
    $new = $row;
    ?>
    <div class="message_box" style="background: black; width: 15vw;height: 8vh; float: right; font-family: 'Agency FB'">
        <span style="color:#C3073F; float: right;font-size: 1.5vw; position: relative; left:-0.5vw">
            <?php
    echo $row['msg'];  ?><br>
        </span>
        <div style="position: relative; top: 4vh; left: 0.2vw">
            <span style="color: #C3073F; float: left; font-size: 1vw">
                <?php
    echo $row['uname'].","; ?><?php echo $row['dt'];;
    ?>
         </span><br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <?php
}
else
{
  if($row['uname']!=$new['uname']) {
    ?>
        <div style="background: white; width: 15vw; height: 8vh; float: left; font-family: 'Agency FB'">
            <span style="color:#C3073F; float:left; font-size: 2vw">
                <?php
    echo $row['msg'];
                ?></span><br>
            <div style="position: relative;  top: 1vh; left: -1vw">
    <span style="color: black; float:left; font-size:1vw"><?php
    echo $row['uname']; ?><?php echo $row['dt'];
                ?></span><br>
        </div>
        </div><br><br><br>
    <?php
}
else{
    ?><div class="message_box" style="background: black; width: 15vw;height: 8vh; float: right; font-family: 'Agency FB'">
        <span style="color:#C3073F; float: right;font-size: 1.5vw; position: relative; left:-0.5vw">
                <?php
                echo $row['msg']; ?><br></span>
          <div style="position: relative; top: 4vh; left: 0.2vw;">
            <span style="color: #C3073F; float: left; font-size: 1vw">
                <?php
    echo $row['uname']; ?><?php echo $row['dt'];
                ?>
            </span>
          </div>
    </div><br>
    <br><br>
            <?php
}
}
endwhile;
?>

       </div>
         <form class="my_message" style="height: 40vh" method="post" action="main.php">
             <input type="text" name="msg" id="msg" placeholder="MESSAGE HERE.." style="background: none; position: relative;top: 7vh; width: 70vw; height: 8vh; font-family: 'Agency FB'; color: #C3073F; left: 2vw">
             <button name="submit" type="submit" id="submit"  style="background: none; border: solid 0.2vw #C3073F; color: #C3073F; font-family: 'Agency FB'; position: relative; top: 7vh; left: 5vw; font-size: 2vw; width: 6vw">SEND</button>
         </form>
     </div>
 </div>
 </body>
<script>
    function show_func(){

        var element = document.getElementById("chathist");
        element.scrollTop = element.scrollHeight;

    };
</script>
</html>

