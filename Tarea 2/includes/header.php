<?php 
session_start();
require 'bdh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
	<title>Poyofy - Poyo para tod@s</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/start.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="includes/script.js"></script>
</head>

<body>
	<div class="main-container">
		<?php 
		if($_SERVER['REQUEST_URI'] == '/T2/account.php' or strpos($_SERVER['REQUEST_URI'], '/T2/edit_account.php') !== false  or strpos($_SERVER['REQUEST_URI'],'/T2/change_pass.php') !== false or strpos($_SERVER['REQUEST_URI'],'/T2/delete_account.php') !== false ) {
			include("includes/sidebar_account.php");

		}
		else {
			 include("includes/sidebar.php");
		}
		?>

		<div id="main" class="main d-flex flex-column">
			<div class="margin-top"></div>
				<div clas="view-container">



