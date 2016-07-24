<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="<?php echo base_url(); ?>">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bassiat.css" media="all">

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Book/GothamHTF-Book.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Medium/GothamHTF-Medium.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-XLight/GothamHTF-XLight.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-LightItalic/GothamHTF-LightItalic.css" media="all">

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
			<div class="row space-bot">
				<div class="c4 first" style="height: 100%;">
					<div class="home-start">
						<div class="menu">
							<ul>
								<li><a href="projetos">Projetos</a></li>
								<li><a href="sobre">Sobre</a></li>
								<li><a href="midia">Mídia</a></li>
								<li><a href="contato">Contato</a></li>
							</ul>
						</div>

						<h1 class="bassiat-logo">
							Bassiat - 2015
						</h1>
					</div>
				</div>
				<div class="c8 last jobs">
<?php if (isset($featured[0])) { ?>
					<div class="row space-bot mobile-margin">
						<div class="c12 featured">
							<h3><a href="projeto/<?= $featured[0]->url_path ?>"><?= $featured[0]->name; ?></a></h3>
							<span class="tags"><?= $featured[0]->tags; ?></span>
							<a href="projeto/<?= $featured[0]->url_path ?>" class="featured-link">
                                <img src="uploads/projects/<?= $featured[0]->url_path . "/" . $featured[0]->featured_img ?>"
                                     border="0" alt="" style="width:100%;" />
                                <span class="overlay overlay-top"></span></a>
						</div>
					</div>
<?php } ?>
					<div class="row space-bot mobile-margin">
<?php if (isset($featured[1])) { ?>
						<div class="c6 first featured">
                            <h3><a href="projeto/<?= $featured[1]->url_path ?>"><?= $featured[1]->name; ?></a></h3>
                            <span class="tags"><?= $featured[1]->tags; ?></span>
                            <a href="projeto/<?= $featured[1]->url_path ?>" class="featured-link">
                                <img src="uploads/projects/<?= $featured[1]->url_path . "/" . $featured[1]->featured_img ?>"
                                     border="0" alt="" style="width:100%;" />
                                <span class="overlay overlay-left"></span></a>
                        </div>
<?php } if (isset($featured[2])) { ?>
						<div class="c6 last featured">
                            <h3 style="margin-left: 10px;"><a href="projeto/<?= $featured[2]->url_path ?>"><?= $featured[2]->name; ?></a></h3>
                            <span style="margin-left: 10px;" class="tags"><?= $featured[2]->tags; ?></span>
                            <a href="projeto/<?= $featured[2]->url_path ?>" class="featured-link">
                                <img src="uploads/projects/<?= $featured[2]->url_path . "/" . $featured[2]->featured_img ?>"
                                     border="0" alt="" style="width:100%;" />
                                <span class="overlay overlay-right"></span></a>
                        </div>
<?php } ?>
					</div>
					<div class="row space-bot mobile-margin">
						<div class="c12 featured about-bassiat">
							<h4 class="title-about">Trabalho Como Arte</h4>
							<p>Entendemos que fazer arquitetura é dar forma aos sonhos dos nossos clientes.<br />
							Portanto, estamos sempre em busca da experiência perfeita.</p>
							<a href="about">- Saiba Mais -</a>
						</div>
					</div>
					<div class="row space-bot">
<?php if (isset($featured[3])) { ?>
						<div class="c6 first featured">
                            <h3><a href="projeto/<?= $featured[3]->url_path ?>"><?= $featured[3]->name; ?></a></h3>
                            <span class="tags"><?= $featured[3]->tags; ?></span>
                            <a href="projeto/<?= $featured[3]->url_path ?>" class="featured-link">
                                <img src="uploads/projects/<?= $featured[3]->url_path . "/" . $featured[3]->featured_img ?>"
                                     border="0" alt="" style="width:100%;" />
                                <span class="overlay overlay-left"></span></a>
                        </div>
<?php } if (isset($featured[4])) { ?>
						<div class="c6 last featured">
                            <h3 style="margin-left: 10px;"><a href="projeto/<?= $featured[4]->url_path ?>"><?= $featured[4]->name; ?></a></h3>
                            <span style="margin-left: 10px;" class="tags"><?= $featured[4]->tags; ?></span>
                            <a href="projeto/<?= $featured[4]->url_path ?>" class="featured-link">
                                <img src="uploads/projects/<?= $featured[4]->url_path . "/" . $featured[4]->featured_img ?>"
                                     border="0" alt="" style="width:100%;" />
                                <span class="overlay overlay-right"></span></a>
                        </div>
<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- grid -->
	</div><!-- content -->
</body>
</html>
