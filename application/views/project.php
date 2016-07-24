<?php

$thisUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$twitterarr = array(
    'text'      => "Bassiat - " . $project->name . " " . $project->tags,
    'url'       => $thisUrl
);
$twitterlink = "https://twitter.com/share?";
foreach($twitterarr as $key=>$value){
    $twitterlink .= rawurlencode($key) . "=" . rawurlencode($value) . "&";
}

?><!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015 - <?= $project->name ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:url"           content="<?= $thisUrl ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Bassiat :: 2015 - <?= $project->name ?>" />
    <meta property="og:description"   content="<?= $project->text_1 ?>" />
    <meta property="og:image"         content="<?php
        echo "http://$_SERVER[HTTP_HOST]/Bassiat";
        echo "/public/uploads/projects/" . $project->url_path . "/" . $project->featured_img
        ;
    ?>" />

	<base href="<?php echo base_url(); ?>">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bassiat.css" media="all">

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Book/GothamHTF-Book.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Medium/GothamHTF-Medium.css" media="all">
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-XLight/GothamHTF-XLight.css" media="all">
    <link rel="canonical" href="<?= $thisUrl ?>">
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

	<!-- Fix elements on top -->
	<script src="js/fixto.js" type="text/javascript"></script>

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

		.summary {
		    border: 1px solid #dddddd;
		    overflow: hidden;
		    margin-top: 20px;
		    background-color: white;
		}
		.summary.scroll-to-fixed-fixed {
		    margin-top: 0px;
		}

	</style>
</head>
<body>
	<div class="content">
		<div class="grid">
			<header class="header row space-bot">
				<?php echo $header ?>
			</header>
			<div class="row space-bot">
				<div class="c12 mobile-padding-none">
					<img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->featured_img; ?>" border="0" alt="" style="width: 100%;" /><br />
				</div>
			</div>
			<div class="row space-bot">
				<div class="c12">
					<div class="internal-content">
						<h2><?= $project->name ?></h2>
						<span class="tags">
							<?= $project->tags ?>
						</span>
					</div>
				</div>
			</div>
			<div class="row space-bot text-column">
				<div class="c4 side last">
					<p class="left-column-text"><?= $project->text_1 ?></p>
				</div>
				<div class="c8 last project-photos mobile-padding-none">

					<div class="row space-bot mobile-margin">
						<div class="c6 first mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_1; ?>" style="width: 100%;" /></div>
						<div class="c6 last mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_2; ?>" style="width: 100%;" /></div>
					</div>

					<div class="row space-bot" style="margin: 0 !important;">
						<div class="c8 first mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_3; ?>" style="width: 100%;" /></div>
						<div class="c4 last">
							<p class="internal-text-column"><?= $project->inside_text_1; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row space-bot text-column">
				<div class="c4 side last">
					<p class="left-column-text"><?= $project->text_2; ?></p>
				</div>
				<div class="c8 last project-photos mobile-padding-none">
					<div class="row space-bot mobile-margin">
						<div class="c12 mobile-padding-none">
							<img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_4; ?>" border="0" alt="" style="width: 100%;" /><br />
						</div>
					</div>
					<div class="row space-bot" style="margin: 0 !important;">
						<div class="c6 first mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_5; ?>" style="width: 100%;" /></div>
						<div class="c6 last mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_6; ?>" style="width: 100%;" /></div>
					</div>
				</div>
			</div>
			<div class="row space-bot text-column">
				<div class="c4 side last">
					<p class="left-column-text"><?= $project->text_3; ?></p>
				</div>
				<div class="c8 last project-photos mobile-padding-none">
					<div class="row space-bot mobile-margin">
						<div class="c12 mobile-padding-none">
							<img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_7; ?>" border="0" alt="" style="width: 100%;" /><br />
						</div>
					</div>
					<div class="row space-bot">
						<div class="c6 first mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_8; ?>" style="width: 100%;" /></div>
						<div class="c6 project-description last mobile-padding-none">
							<p>
                                <?= $project->inside_text_2; ?>
                            </p>
						</div>
					</div>

					<div class="row space-bot">
						<div class="c4 mobile-padding-none" style="padding-left: 0px !important; padding-right: 20px !important;"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_9; ?>" style="width: 100%;" /></div>
						<div class="c4 mobile-padding-none"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_10; ?>" style="width: 100%;" /></div>
						<div class="c4 mobile-padding-none" style="padding-left: 20px !important; padding-right: 0px !important;"><img src="public/uploads/projects/<?php echo $project->url_path . "/" . $project->img_11; ?>" style="width: 100%;" /></div>
					</div>

					<div class="row space-bot">
						<div class="c12">
							<ul class="share">
								<li id="compartilhe"><img src="img/compartilhe.jpg" border="0" /></li>

                                <!-- <li><a href="" id="insta-share">Instagram</a></li> There's no such thing -->

                                <li><a data-pin-custom="true" href="https://www.pinterest.com/pin/create/button/" id="pinterest-share">Pinterest</a></li>

                                <li><a target="_blank"
                                       href="<?php echo $twitterlink ?>"
                                       data-counturl="<?php echo $thisUrl ?>"
                                       id="twitter-share">Twitter</a></li>

								<li><a href="http://www.facebook.com/sharer.php?u=<?= $thisUrl ?>"
                                       id="fb-share" target="_blank">Facebook</a></li>

                                <li><a href="mailto:?Subject=Bassiat - <?php echo htmlentities($project->name);
                                    ?>&body=Bassiat - <?= $project->name
                                    ?>%0D%0A %0D%0A<?= $project->tags
                                    ?>%0D%0A %0D%0A<?= $project->text_1
                                    ?>%0D%0A %0D%0ALink: <?= $thisUrl
                                    ?>%0D%0A
								" id="mail-share" target="_blank">Mail</a></li>
							</ul>
                            <!-- Your share button code -->
                            <div class="fb-share-button" data-href="<?= $thisUrl ?>" data-layout="link"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row space-bot" style="margin: 0 !important; background: #eeeeee;">
				<div class="c12">
					<div class="c4 last mobile-appearance">
						&nbsp;
					</div>
					<div class="c8">
						<ul class="modern-traditional">
							<li id="modern"><a href="projetos/moderno">Moderno</a></li>
							<li id="traditional"><a href="projetos/tradicional">Tradicional</a></li>
							<li class="more-jobs"><a href="projetos">Mais trabalhos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		</div>
	</div>
	<footer class="footer row space-bot">
		<?php echo $footer ?>
	</footer>
	<script>
		// $('.csticky').first().fixTo('.csticky-holder').first();
	  $('.side').fixTo('.text-column', {top: 0, useNativeSticky:true});
	  // $('.absolute').fixTo('body');
	</script>
    <script
        type="text/javascript"
        async defer
        src="//assets.pinterest.com/js/pinit.js"
        ></script>
</body>
</html>
