<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="/site2/painel/">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/ivory.css" media="all">
	<style>
	 body a {
		 font-family: Arial, Helvetica, sans-serif;
		 font-size: 13px;
		 color: #999999;
	 }
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
			<div class="row">
				<h4 class="text-center"><img src="../img/bassiat-logo.png" /></h4>
				<div class="row space-bot">
					<div class="c4 first">

					</div>
					<div class="c4">
                        <a href="../painel">Menu</a>
						<div class="text-center">
							<h4>Lista de mídia</h4>
<?php foreach($medias as $media){ ?>
                                <a href="midia/<?= $media->id ?>"><?= $media->name ?></a><br />
<?php } ?>							<br />
							<br />
                            <form action="midia/nova" method="post">
                                <button class="red" type="submit">Adicionar nova mídia</button>
                            </form>
						</div>

					</div>
					<div class="c4">

					</div>
				</div>
			</div>
		</div><!-- grid -->
	</div><!-- content -->
</body>
</html>
