<?php $man = "/rule" ?>
<div class="hea">
    <ul>
        <li><a href="<?php echo $man ?>">Home</a></li>
    </ul>
    <?php if (!isset($_SESSION['nam'])) {?>
    <ul>
        <li><a href="<?php echo $man ?>">Register</a></li>
        <li><a href="<?php echo $man ?>/auth/log.php">Login</a></li>
    </ul>
    <?php } else { ?>
        <ul>
            <li><a href=""><?php echo $_SESSION['nam'] ?></a></li>
        </ul>
    <?php } ?>

</div>