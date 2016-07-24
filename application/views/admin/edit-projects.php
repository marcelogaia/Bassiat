<!DOCTYPE HTML>
<html>
<head>
	<title>Bassiat :: 2015</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="<?php echo base_url(); ?>painel/">

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/ivory.css" media="all">
	<style>
	 body a {
		 font-family: Arial, Helvetica, sans-serif;
		 font-size: 15px;
		 color: #999999;
		 line-height: 22px;
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

     .erro {
         padding: 7px;
         margin: 10px 30px;
         background-color: #FFFFAA;
         border: 1px #b94a48 dashed;
         font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
         font-size: 13px;
         color: red;
         line-height: 23px;
     <?php if(!isset($error)) echo "display: none;"?>
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
					<div class="c4" last>
                        <a href="../painel">Menu</a>
						<div class="text-center">
                            <div class="erro"><?php if(isset($error)) echo $error ?></div>
							<h4>Lista de projetos</h4>
                            <ul style="list-style:none;">
                                <li style="border-bottom:1px solid black"><b>Destaque</b></li>
<?php foreach($projects as $project){
    if($project->featured_order == 1) {?>
                                <li>
                                    <a href="projeto/<?= $project->id ?>"
                                       style="display: inline-block; width: 150px;">
                                        <?= $project->name ?></a>
                                    <span>
                                        <a href="projeto/remover_destaque/<?= $project->id?>" style="color:red; font-size:80%">Remover destaque</a>
                                        - <a href="projeto/descer/<?= $project->id?>" style="color:red; font-size:80%">Descer</a>
                                    </span>

                                </li>
<?php }} ?>
                                <li>&nbsp;</li>
                                <li style="border-bottom:1px solid black"><b>Sub-destaque</b></li>
<?php foreach($projects as $project){
    if($project->featured_order > 1) {?>
                                <li><a href="projeto/<?= $project->id ?>"
                                       style="display: inline-block; width: 150px;">
                                        <?= $project->name ?></a>
                                    <span>
                                        <a href="projeto/remover_destaque/<?= $project->id?>" style="color:red; font-size:80%">Remover destaque</a>
                                        - <a href="projeto/destaque/<?= $project->id?>" style="color:#FF9900; font-size:80%">Destaque</a>
<?php   if($project->featured_order != 2){ ?>
                                        - <a href="projeto/subir/<?= $project->id?>" style="color:green; font-size:80%">Subir</a>
<?php   } if($project->featured_order < $numfeatured) { ?>
                                        - <a href="projeto/descer/<?= $project->id?>" style="color:red; font-size:80%">Descer</a>
<?php   } ?>
                                    </span>
                                </li>
<?php }} ?>
                                <li>&nbsp;</li>
                                <li style="border-bottom:1px solid black"><b>Demais projectos</b></li>
<?php foreach($projects as $project){
    if($project->featured_order == 0){?>
                                <li><a href="projeto/<?= $project->id ?>"
                                       style="display: inline-block; width: 150px;">
                                        <?= $project->name ?></a>
                                    <span>
                                        <a href="projeto/destaque/<?= $project->id?>" style="color:#FF9900; font-size:80%">Destaque</a> -
                                        <a href="projeto/subir/<?= $project->id?>" style="color:#00AFF0; font-size:80%">Sub-destaque</a>
                                    </span>
                                </li>
<?php }} ?>
                            </ul>

							<br />
							<br />
							<form action="projeto/novo" method="post">
                                <button class="red" type="submit">Adicionar novo projeto</button>
                            </form>
						</div>
					</div>
					<div class="c4 first">

					</div>
				</div>
			</div>
		</div><!-- grid -->
	</div><!-- content -->
        <script>

        </script>
</body>
</html>
