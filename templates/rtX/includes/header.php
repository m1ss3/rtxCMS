<!DOCTYPE html>
<html lang="en">

<?php
global $rtX;
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Tum CSS'ler -->
	<link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/style/css/index.css?<?= time() ?>">

	<title><?= $config['hotelName']  . ': ' . $page ?></title>
</head>

<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<img class="avatar" src="<?= $rtX['rtXLookPath'] . User::userData('look') ?>&head_direction=3&direction=2&action=wlk&gesture=sml" alt="<?= User::userData('username') ?>'s Avatar">
					<li class="colorlib-active"><a href="#">
							<?= User::userData('username') ?>
						</a></li>
					<li><a href="/community">Community</a></li>
					<li><a href="/staff">Staffs</a></li>
					<li><a href="/news">News</a></li>
					<li><a href="#" style="color:gray;">Settings</a></li>
					<li><a href="#" style="color:red;">Log out</a></li>
				</ul>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->
	</div><!-- END COLORLIB-PAGE -->

	<script src="/templates/<?= $config['skin'] ?>/js/jquery.min.js"></script>
	<script src="/templates/<?= $config['skin'] ?>/js/popper.js"></script>
	<script src="/templates/<?= $config['skin'] ?>/js/bootstrap.min.js"></script>
	<script src="/templates/<?= $config['skin'] ?>/js/main.js"></script>
</body>

</html>