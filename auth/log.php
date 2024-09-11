<?php
    include("../init.php");
?>
<div class="con">
    <form action="auth.php" method="post">
        <label for="emi">Email OR Name</label>
        <br>
        <input type="text" name="eminam" id="eminam">
        <br>
        <label for="pass">Password</label>
        <br>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Login" name="log">
    </form>
</div>
<?php include("../include/fotr.php") ?>
    
