<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="/site2/painel">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
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

        .erro {
            padding: 7px;
            margin: 10px 30px;
            background-color: #FFFFAA;
            border: 1px #b94a48 dashed;
            font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 13px;
            color: red;
            line-height: 23px;
            <?php if($login == "") echo "display: none;"?>
        }
	</style>

</head>
<body>
	<div class="content">
		<div class="grid">
			<div class="row">
				<h4 class="text-center"><img src="img/bassiat-logo.png" /></h4>
				<div class="row space-bot">
					<div class="c4 first">
					</div>
					<div class="c4">
						<div class="text-center">
							<br />
							<br />
							<br />
							<br />
							<br />
                            <div class="erro"><?= $login ?></div>
							<form class="vform" name="" id="" action="painel/login" method="post">
								<fieldset>
									<label>Input</label>
									<input type="text" name="user" id="" placeholder="Usuário" />
								</fieldset>
								<fieldset>
									<label>Input</label>
									<input type="password" name="password" id="" placeholder="Senha" />
								</fieldset>
								<button class="red" type="submit">Entrar</button>
							</form>
						</div>
					</div>
					<div class="c4 first">
					</div>
				</div>
			</div>
		</div><!-- grid -->
	</div><!-- content -->
</body>
</html>
