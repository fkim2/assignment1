<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title> Fayth Kim </title>
	<link rel = "stylesheet" href = "../css/style.css" />
</head>
<?php
	$home= "button";
	$introduction = "button";
	$role = "button";
	$activePage= basename($_SERVER['PHP_SELF']);

	if($activePage=="index.php"){
		$home = 'activeButton';
		echo "<a href='index.php#home'> Home </a>";
	} else if($activePage=="introduction.php"){
		$introduction = 'activeButton';
	}else if($activePage =="role.php"){
		$role = 'activeButton';
	}
?>

<a class = "<?php echo $home;?>" </a>
<a class = "<?php echo $introduction;?>" href = "includes/introduction.php">Introduction</a>
<a class = "<?php echo $role;?>" href = "includes/role.php">Initial Team Role</a>
</html>


