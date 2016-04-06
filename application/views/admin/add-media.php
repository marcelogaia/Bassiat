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
                        <a href="../painel">Menu</a> &rarr;
                        <a href="../painel/midias">Midias</a> &rarr;
                        <?= $media->name ?>
						<div class="text-center">
							<h4>Gerenciamento - Mídia</h4><br />
							<br />

                            <form class="vform" name="" id="" enctype="multipart/form-data" method="post" action="midia/<?= $media->id  ?>">

                                <input type="hidden" name="id" value="<?= $media->id ?>">
                                <input type="hidden" name="url_path" value="<?= $media->url_path ?>">
                                <fieldset>
									<label>Nome da mídia</label>
									<input type="text" name="name" id="" placeholder="Nome da mídia" value="<?= $media->name ?>" />
								</fieldset>
								<fieldset>
									<label>Imagens do projeto - 5 imagens</label>
<?php if($media->img_1 != ""){ ?>
                                    <img src="../uploads/media/<?= $media->url_path . "/" . $media->img_1 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_1" accept="image/*">
<?php if($media->img_2 != ""){ ?>
                                    <img src="../uploads/media/<?= $media->url_path . "/" . $media->img_2 ?>" class="project-img">
<?php    } ?>
									<input type="file" name="img_2" accept="image/*">
<?php if($media->img_3 != ""){ ?>
                                    <img src="../uploads/media/<?= $media->url_path . "/" . $media->img_3 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_3" accept="image/*">
<?php if($media->img_4 != ""){ ?>
                                    <img src="../uploads/media/<?= $media->url_path . "/" . $media->img_4 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_4" accept="image/*">
<?php if($media->img_5 != ""){ ?>
                                    <img src="../uploads/media/<?= $media->url_path . "/" . $media->img_5 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_5" accept="image/*">
								</fieldset>


							<br />
							<br />
							<button class="green" type="submit">Cadastrar mídia</button>
                                <button class="red" type="button" onclick="confirmRemove()">Remover projeto</button>
                        </div>
					</div>
					<div class="c4 first">

					</div>
				</div>
			</div>
		</div><!-- grid -->
	</div><!-- content -->
    <script>
        function confirmRemove() {
            if (confirm('Tem certeza que deseja remover "<?= $media->name ?>"?')) {
                window.location.href = 'midia/remover/<?= $media->id ?>';
            }
        }
    </script>
</body>
</html>
