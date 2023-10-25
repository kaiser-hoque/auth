<?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit; 
    }
?>

<?php
    require_once('include/header.php');
?>

<div class="container-fluid">
    <div class="row">
        <p>Hi, Dear wlm, welcome to Your Dashboard.</p> 
        <a href="logout.php">Logout</a>
    </div>
</div>

<?php
    require_once('include/footer.php');
?>
