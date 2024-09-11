<?php 
    include("conn.php");
    session_start();

    if (isset($_POST["log"])) {
        $eminam = $_POST["eminam"];
        $pass = md5($_POST["pass"]);

        $slct = "SELECT * FROM usr WHERE (nam = '$eminam' OR emi = '$eminam') AND pass = '$pass'";
        $rslt = mysqli_query($conn, $slct);
        $row = mysqli_num_rows($rslt);

        if ($row > 0) {
            $lol = mysqli_fetch_assoc( $rslt );
            $_SESSION['nam'] = $lol['nam'];
            $_SESSION['id'] = $lol['id'];
            header("location: ../index.php");
        }else {
            header("location: log.php");
        }
    }
