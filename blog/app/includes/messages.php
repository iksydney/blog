<?php if(isset($_SESSION['message'])):?>
    <div class="msg <?php echo $_SESSION['type'];?>">
        <li><?php echo $_SESSION['message'];?></li>
    </div>
<!-- After showing success message, unset the variable -->
    <?php 
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    ?>
<?php endif; ?>