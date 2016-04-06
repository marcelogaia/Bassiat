<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="/site2/">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bassiat.css" media="all">

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Book/GothamHTF-Book.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-LightItalic/GothamHTF-LightItalic.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Medium/GothamHTF-Medium.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-XLight/GothamHTF-XLight.css" media="all">

	<!-- For Date picker only -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>
	  $(document).ready(function() {
	    $("#datepicker1").datepicker();
		$("#datepicker2").datepicker();
	  });
	</script>
	<!-- For Date picker only -->

	<style>
		.content{width: 100%; height: auto;}
	.note {
		background-color: #ffffff;
		padding: 10px 0;
		color: #333333;
				border-radius:5px;
		   -moz-border-radius:5px;
		-webkit-border-radius:5px;
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	       -moz-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	}
	</style>

</head>
<body>
	<div class="content">
		<div class="grid">
			<header class="row space-bot">
				<?php echo $header; ?>
			</header>
			<div class="row space-bot">
				<div class="c12">
					<div class="internal-content media">
						<h2 class="title">Mídia</h2>

						<div class="row space-bot">
							<div class="c12">
								<br />
								<br />
								<br />
								<br />
<?php 	foreach($medias as $media){ ?>
								<h4><?= $media->name ?></h4>
								<ul class="media-list">
<?php 		if ($media->img_1 != "") { ?>
									<li><img src="public/uploads/media/<?= $media->url_path . "/" . $media->img_1; ?>" border="0" /></li>
<?php		}
			if ($media->img_2 != "") { ?>
									<li><img src="public/uploads/media/<?= $media->url_path . "/" .  $media->img_2; ?>" border="0" /></li>
<?php		}
			if ($media->img_3 != "") { ?>
									<li><img src="public/uploads/media/<?= $media->url_path . "/" .  $media->img_3; ?>" border="0" /></li>
<?php		}
			if ($media->img_4 != "") { ?>
									<li><img src="public/uploads/media/<?= $media->url_path . "/" .  $media->img_4; ?>" border="0" /></li>
<?php		}
			if ($media->img_5 != "") { ?>
									<li class="last-media"><img src="public/uploads/media/<?= $media->url_path . "/" .  $media->img_5; ?>" border="0" /></li>
<?php		} ?>
								</ul>
<?php } ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="row space-bot">
		<?php echo $footer ?>
	</footer>
</body>
</html>
