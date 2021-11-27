<?php>
	require_once 'init.php';
	$page = 'Trang chu';
?>
<?php include 'header.php'; ?>
<?php if ($_SESSION['user']):?>
Chào bạn <?php echo $_SESSION['user']['displayName'] ?> đã quay lại
<?php else: ?>
Chào mừng quý khách đến với web
<?php endif ?>
<?php include 'footer.php';?>
