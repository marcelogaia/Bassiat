

<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="/site2/">

	<!-- javascript -->
	<script src="js/jquery-1.4.3.min.js" type="text/javascript"></script>

	<!-- css -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bassiat.css" media="all">

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Book/GothamHTF-Book.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Medium/GothamHTF-Medium.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-XLight/GothamHTF-XLight.css" media="all">

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
			<div class="internal-content-projects">
				<div class="inside-jobs">
					<div class="row space-bot">
<?php
$count = 0;
foreach($projects as $project) { ?>
						<div class="c4 featured">
							<a href="projeto/<?= $project->url_path ?>" class="job-link">
								<img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->featured_img; ?>" border="0" alt="" />
								<span class="overlay overlay-left">
									<h3><?= $project->name; ?></h3>
									<span class="tags"><?= $project->tags; ?></span>
								</span>
							</a>
						</div>
<?php
    $count++;
    if(($count) % 3 == 0){ ?>
          </div>
          <div class="row space-bot">
<?php
    }
}
if($count == 5 && $showmore) { ?>
						<div class="c4 featured">
							<a href="projetos/#" class="job-link">
								<img src="img/projects/more-jobs.jpg" border="0" alt="" />
								<span class="overlay overlay-right more-jobs-hover">
									<img src="img/projects/more-jobs-hover.jpg" style="width: 100%;" />
								</span>
							</a>
						</div>
					</div>
<?php } else { ?>
					</div>
<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<footer class="row space-bot">
		<?php echo $footer ?>
	</footer>
</body>
</html>
