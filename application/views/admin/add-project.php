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

        .project-img{
            max-height: 200px;
            max-width: 200px;
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
                        <a href="../painel/projetos">Projetos</a> &rarr;
                        <?= $project->name ?>
						<div class="text-center">
							<h4><?= $project->name != "" ? $project->name : "Novo projeto" ?></h4><br />
							<br />

							<form class="vform" name="" id="" enctype="multipart/form-data" method="post" action="projeto/<?= $project->id  ?>">
                                <fieldset>
                                    <input type="hidden" name="id" value="<?= $project->id ?>">
                                    <input type="hidden" name="url_path" value="<?= $project->url_path ?>">
                                    <label>Nome (Máx 15 caracteres)</label>
                                    <input type="text" name="name" id="" placeholder="Nome do projeto" value="<?= $project->name ?>" maxlength="15" />
                                </fieldset>
                                <fieldset>
									<label>Categoria</label>
									<select name="category" id="">
									<option value="Moderno">Moderno</option>
									<option value="Tradicional">Tradicional</option>
									</select>
								</fieldset>
								<fieldset>
									<label>Tags</label>
									<input type="text" name="tags" id="" placeholder="#tags" value="<?= $project->tags ?>" />
								</fieldset>
								<fieldset>
									<label>Imagem destaque (1500 x 1000px)</label>
<?php if($project->featured_img != ""){ ?>
                                        <img src="../uploads/projects/<?= $project->url_path . "/" . $project->featured_img ?>" class="project-img">
<?php    } ?>
									<input type="file" name="featured_img" accept="image/*">
								</fieldset>

								<fieldset>
									<label>Textos do projeto (Máx 350 caracteres)</label>
									<textarea name="text_1" id="" placeholder="Texto 1" maxlength="350"><?= $project->text_1 ?></textarea>
									<textarea name="text_2" id="" placeholder="Texto 2" maxlength="350"><?= $project->text_2 ?></textarea>
									<textarea name="text_3" id="" placeholder="Texto 3" maxlength="350"><?= $project->text_3 ?></textarea>
								</fieldset>

								<fieldset>
									<label>Textos da área interna (Máx 200 caracteres)</label>
									<textarea name="inside_text_1" id="" placeholder="Texto 1" maxlength="200"><?= $project->inside_text_1 ?></textarea>
									<textarea name="inside_text_2" id="" placeholder="Texto 2" maxlength="200"><?= $project->inside_text_2 ?></textarea>
								</fieldset>

								<fieldset>
									<label>Imagens do projeto - 1 (1500 x 1000px)</label>

<?php if($project->img_1 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_1 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_1" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 2 (1500 x 1000px)</label>
<?php if($project->img_2 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_2 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_2" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 3 (1500 x 1000px)</label>
<?php if($project->img_3 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_3 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_3" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 4 (1500 x 1000px)</label>
<?php if($project->img_4 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_4 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_4" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 5 (1500 x 1000px)</label>
<?php if($project->img_5 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_5 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_5" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 6 (1500 x 1000px)</label>
<?php if($project->img_6 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_6 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_6" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 7 (1500 x 1000px)</label>
<?php if($project->img_7 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_7 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_7" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 8 (1500 x 1000px)</label>
<?php if($project->img_8 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_8 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_8" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 9 (1000 x 1500px)</label>
<?php if($project->img_9 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_9 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_9" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 10 (1000 x 1500px)</label>
<?php if($project->img_10 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_10 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_10" accept="image/*">
                                </fieldset>

                                <fieldset>
                                    <label>Imagens do projeto - 11 (1000 x 1500px)</label>
<?php if($project->img_11 != ""){ ?>
                                    <img src="../uploads/projects/<?= $project->url_path . "/" . $project->img_11 ?>" class="project-img">
<?php    } ?>
                                    <input type="file" name="img_11" accept="image/*">
								</fieldset>


							<br />
							<br />
<?php if($project->id == 0){ ?>
                            <button class="green" type="submit">Cadastrar projeto</button>
<?php } else { ?>
							<button class="green" type="submit">Salvar projeto</button>
							<button class="red" type="button" onclick="confirmRemove()">Remover projeto</button>
<?php } ?>
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
            if (confirm('Tem certeza que deseja remover "<?= $project->name ?>"?')) {
                window.location.href = 'projeto/remover/<?= $project->id ?>';
            }
        }
    </script>
</body>
</html>
