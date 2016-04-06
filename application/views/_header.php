<?php
/**
 * Created by PhpStorm.
 * User: Marcelo Gaia
 * Date: 2015-10-01
 * Time: 8:00 PM
 */

$controller = $this->uri->segment(1);

?>

<div class="c6 first">
    <h1 class="internal-bassiat-logo">
        <a href="<?php echo base_url(); ?>">Bassiat</a>
    </h1>
</div>
<div class="c6 last">
    <nav>
        <li><a href="projetos"<?php if($controller == 'projetos') echo " class=\"active\""; ?>>Projetos</a></li>
        <li><a href="sobre"<?php if($controller == 'sobre') echo " class=\"active\""; ?>>Sobre</a></li>
        <li><a href="midia"<?php if($controller == 'midia') echo " class=\"active\""; ?>>Mídia</a></li>
        <li><a href="contato" id="contact"<?php if($controller == 'contato') echo " class=\"active\""; ?>>Contato</a></li>
    </nav>
</div>
