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

	<!-- Contact Form CSS files -->
	<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/GothamHTF-Book/GothamHTF-Book.css" media="all">
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
<body class="bg-mailing">
	<div class="content">
		<div class="grid">
			<header class="row space-bot">
				<?php echo $header; ?>
			</header>
			<div class="row space-bot">
				<div class="c12">
					<div class="internal-content mailing">
						<div>
							<h3>Faça parte de nosso mailing</h3>
							<form method="post">
								<input type="text" onfocus="if(value=='Nome') value = ''" onblur="if(value=='') value = 'Nome';" value="Nome" /><br />
								<input type="text" onfocus="if(value=='E-mail') value = ''" onblur="if(value=='') value = 'E-mail';" value="E-mail" /><br />
								<input type="button" value="Aceitar" class="bt-aceitar" />
							</form>
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
