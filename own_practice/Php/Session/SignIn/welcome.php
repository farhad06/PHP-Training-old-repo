<?php
session_start();
include('../header.php');
if (isset($_SESSION['USER'])){
?>
<div style="float: right;">
<?php echo 'Welcome Mr. '.$_SESSION['USER'];?>
<a href="logout.php">Logout</a>
</div>
<?php }else{
    header('location:index.php?auth=false');
}
?>


<?php include('../footer.php');?>